vcl 4.0;
import std;
import cookie;

backend default {
  .host = "web-service";
  .port = "80";
}

acl purge {
  "localhost";
  "127.0.0.1";
}

sub vcl_recv {
  if (req.restarts == 0) {
    if (req.http.x-forwarded-for) {
       set req.http.X-Forwarded-For = req.http.X-Forwarded-For + ", " + client.ip;
    } else {
       set req.http.X-Forwarded-For = client.ip;
    }
  }

  if (req.method == "PURGE") {
    if (!client.ip ~ purge) {
      return (synth(403, "Not allowed."));
    }
    set req.http.X-Purge = "YES";
    return (purge);
  }

  if (req.method == "BAN") {
    # Same ACL check as above:
    if (!client.ip ~ purge) {
      return(synth(403, "Not allowed."));
    }
    set req.http.X-Ban = "YES";
    ban("req.http.host == " + req.http.host +
          " && req.url == " + req.url);

    # Throw a synthetic page so the
    # request won't go to the backend.
    return(synth(200, "Ban added"));
  }

  if (req.method != "GET" &&
      req.method != "HEAD" &&
      req.method != "PUT" &&
      req.method != "POST" &&
      req.method != "TRACE" &&
      req.method != "OPTIONS" &&
      req.method != "PATCH" &&
      req.method != "DELETE") {
    /* Non-RFC2616 or CONNECT which is weird. */
    return (pipe);
  }

  if (req.http.Upgrade ~ "(?i)websocket") {
    return (pipe);
  }

  if (req.method != "GET" && req.method != "HEAD") {
    return (pass);
  }

  if (req.http.cookie) {
    cookie.parse(req.http.cookie);
    cookie.filter_except("SESSIONID,PHPSESSID");
    # Store it back into req so it will be passed to the backend.
    set req.http.cookie = cookie.get_string();

    # If empty, unset so the builtin VCL can consider it for caching.
    if (req.http.cookie == "") {
      unset req.http.cookie;
    }
  }

  # Don't handle big file
  if (req.url ~ "^[^?]*\.(7z|avi|bz2|flac|flv|gz|mka|mkv|mov|mp3|mp4|mpeg|mpg|ogg|ogm|opus|rar|tar|tgz|tbz|txz|wav|webm|xz|zip)(\?.*)?$") {
    return (pipe);
  }

  # Don't cache static file
  if (req.url ~ "^[^?]*\.(7z|avi|bmp|bz2|css|csv|doc|docx|eot|flac|flv|gif|gz|ico|jpeg|jpg|js|less|mka|mkv|mov|mp3|mp4|mpeg|mpg|odt|otf|ogg|ogm|opus|pdf|png|ppt|pptx|rar|rtf|svg|svgz|swf|tar|tbz|tgz|ttf|txt|txz|wav|webm|webp|woff|woff2|xls|xlsx|xml|xz|zip)(\?.*)?$") {
    return (pass);
  }

  set req.http.Surrogate-Capability = "key=ESI/1.0";

  if (req.http.Authorization) {
    # Not cacheable by default
    return (pass);
  }

  return (hash);
}

sub vcl_pipe {
  # Note that only the first request to the backend will have
  # X-Forwarded-For set.  If you use X-Forwarded-For and want to
  # have it set for all requests, make sure to have:
  # set bereq.http.connection = "close";
  # here.  It is not set by default as it might break some broken web
  # applications, like IIS with NTLM authentication.
  # bereq.http.connection = "close";

  if (req.http.upgrade) {
    set bereq.http.upgrade = req.http.upgrade;
  }
  return (pipe);
}

sub vcl_pass {
  return (fetch);
}

sub vcl_hash {
  hash_data(req.url);
  if (req.http.host) {
    hash_data(req.http.host);
  } else {
    hash_data(server.ip);
  }

  if (req.http.Accept-Encoding) {
    hash_data(req.http.Accept-Encoding);
  }

  if (req.http.Cookie) {
    hash_data(req.http.Cookie);
  }
  return (lookup);
}

sub vcl_hit {
  if (obj.ttl >= 0s) {
    // A pure unadultered hit, deliver it
    return (deliver);
  }
  // Deliver the object. If it is stale, a background fetch to refresh it is triggered.
  if ((obj.ttl + obj.grace > 0s)) {
    // Object is in grace, deliver it
    // Automatically triggers a background fetch
    return (deliver);
  }
  // fetch & deliver once we get the result
  return (fetch);
}

sub vcl_miss {
  return (fetch);
}

sub vcl_backend_response {
  if (beresp.http.Surrogate-Control ~ "ESI/1.0") {
    unset beresp.http.Surrogate-Control;
    set beresp.do_esi = true;
  }

  if (beresp.status == 500 || beresp.status == 502 || beresp.status == 503 || beresp.status == 504) {
    return (abandon);
  }

  if (beresp.http.Set-Cookie) {
    set beresp.http.original-set-cookie = beresp.http.Set-Cookie;
    unset beresp.http.Set-Cookie;
  }

  if (beresp.ttl <= 0s ||
      beresp.http.Set-Cookie ||
      beresp.http.Vary == "*") {
    /*
    * Mark as "Hit-For-Pass" for the next 2 minutes
    */
    set beresp.uncacheable = true;
    set beresp.ttl = 120s;
    return (deliver);
  }

  # we allow keeping stale object for extra 1h
  set beresp.grace = 1h;
  return (deliver);
}

sub vcl_deliver {
  if (resp.http.original-set-cookie) {
    set resp.http.Set-Cookie = resp.http.original-set-cookie;
    unset resp.http.original-set-cookie;
  }

  if (obj.hits > 0) {
    set resp.http.X-Cache = "HIT";
  } else {
    set resp.http.X-Cache = "MISS";
  }

  if (req.http.X-Purge == "YES") {
    unset req.http.X-Purge;
    set resp.http.X-Purge = "YES";
  }

  if (req.http.X-Ban == "YES") {
    unset req.http.X-Ban;
    set resp.http.X-Ban = "YES";
  }

  set resp.http.X-Cache-Hits = obj.hits;
  return (deliver);
}

sub vcl_backend_error {
  return (deliver);
}

sub vcl_init {
  return (ok);
}

sub vcl_fini {
  return (ok);
}