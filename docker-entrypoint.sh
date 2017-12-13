#!/bin/bash
set -e

echo ${CAAS_API}
HTML_DIR='/var/www/html'
CONFIG_FILE="${HTML_DIR}/src/settings.php"

#create configuration.php
createConfigFile() {
	echo "### Build settings.php"

	templateFile="${HTML_DIR}/src/settings.php.template"

	if [[ ! -f "${templateFile}" ]]; then
		echo "${templateFile} is not found!"
		return 1
	fi

	replacements=''
	while IFS="=" read -r key value; do
		replacements=$replacements"s/\[$key\]/$(echo $value| sed 's/\//\\\//g' | sed 's/\&/\\\&/g')/g;";
	done <<< "$(printenv)"
	sed "$replacements" "${templateFile}" > "${CONFIG_FILE}"
	echo "### Complete settings.php"
}

# create configuration.php at ext_data folder if not exist
if [[ ! -f "${CONFIG_FILE}" ]]; then
	createConfigFile
fi

if [[ "${HTTPS_WEBP_REDIRECT_ENABLE}" == "true" ]]; then
    sed -i 's/_REQUEST_SCHEME_/https/' ${HTML_DIR}/public/.htaccess
else
    sed -i 's/_REQUEST_SCHEME_/http/' ${HTML_DIR}/public/.htaccess
fi

exec "$@"
