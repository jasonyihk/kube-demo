<?php
namespace CaaS;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\ServerException;

class CaaSNewsGetter
{
    const NEWS_TYPE = 'news';
    const PUBLIC_NEWS = 'public';
    const DISTRIBUTOR_NEWS = 'distributor';

    private $_client;
    private $_authHeaders;

    public function __construct($baseUri, $apiKey)
    {
        // call news api
        $this->_client = new Client([
            'base_uri' => $baseUri, // Base URI is used with relative requests
            'timeout' => 0.0, // You can set any number of default request options.

        ]);

        $this->_authHeaders = [
            'apikey' => $apiKey,
            'content-type' => 'application/json',
        ];
    }

    private function _getLang($locale)
    {
        $lang = 'en_GB';
        switch ($locale) {
            case 'zh-cn':
                $lang = 'zh_CN';
                break;
            case 'fr':
                $lang = 'fr_CA';
                break;
            case 'en':
            default:
                $lang = 'en_GB';
                break;
        }
        return $lang;
    }

    public function getPublicNews($id)
    {
        $news = null;

        try {
            $response = $this->_client->get('om.caas/v1/apps/corporate/article/'.$id, [
            'headers' => $this->_authHeaders
            ]);

            if ($response->getBody()) {
                $news = json_decode($response->getBody());
            }
        } catch (ConnectException $exception) {
            error_log($exception);
            return 'Connect Exception';
        } catch (ClientException $exception) {
            $errorBody = $exception->getResponse()->getBody(true);
            error_log($errorBody);
            return 'Client Exception';
        } catch (ServerException $exception) {
            error_log($exception);
            return 'Server Exception';
        }
        return $news;
    }

    private function _getNewsList($market, $locale, $tags = array('news'), $limit = 100)
    {
        $newsList = null;
        $body = [
            'languages' => [$this->_getLang($locale)],
            'markets' => [$market],
            'types' => ['article'],
            'page' => 1,
            'limit' => $limit,
            'sort' => '-news_date',
            'tags' => $tags
        ];

        try {
            $response = $this->_client->post('om.caas/v1/apps/corporate/contents', [
            'headers' => $this->_authHeaders,
            'json' => $body
            ]);

            if ($response->getBody()) {
                $newsList = json_decode($response->getBody());
            }
        } catch (ConnectException $exception) {
            error_log($exception);
            return 'Connect Exception';
        } catch (ClientException $exception) {
            $errorBody = $exception->getResponse()->getBody(true);
            error_log($errorBody);
            return 'Client Exception';
        } catch (ServerException $exception){
            $errorBody = $exception->getResponse()->getBody(true);
            error_log($errorBody);
            return 'Server Exception';
        }
        return $newsList;
    }

    public function getPublicNewsList($market, $locale, $limit = 100)
    {
        return $this->_getNewsList($market, $locale, $tags = array(self::NEWS_TYPE, self::PUBLIC_NEWS), $limit);
    }

    public function getRelatedNewsList($market, $locale, $targetNews, $limit = 2)
    {
        $relatedNews = array();
        $resveredTags = array(self::PUBLIC_NEWS, self::NEWS_TYPE);
        $searchTags = array_values(array_diff($targetNews->tags, $resveredTags));
        $newsList = $this->_getNewsList($market, $locale, $searchTags, $limit + 1);
        foreach ($newsList->contents as $news) {
            if ($news->id !== $targetNews->id
            // @todo: quick solution only, should work in backend API
            && array_intersect($resveredTags, $news->tags)
            ) {
                $relatedNews[] = $news;
                if (sizeof($relatedNews) === $limit) {
                    break;
                }
            }
        }
        return $relatedNews;
    }
}
