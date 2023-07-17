#!/bin/bash
set -e

ENV_PHP="development"

function run_command() {
	if ! [ $(id -u) = 0 ]; then
		sudo -ES su -c "$1"
	else
		$1
	fi
}

if [ -n "$RUN_CRON_SERVICE" ]; then
	run_command "service cron start" || true
fi

if [ -n "$ENV" ] && [ "$ENV" = "production" ]; then
	ENV_PHP=$ENV
fi

run_command "cp -rf $PHP_INI_DIR/php.ini-$ENV_PHP $PHP_INI_DIR/php.ini"

if [ -n "$UID" ] && [ -n "$GID" ]; then
	run_command "usermod -u $UID $USER && groupmod -g $GID $USER"
fi

if [ -n "$XDEBUG_REMOTE_ENABLE" ]; then
	run_command "echo 'zend_extension = xdebug.so' > /usr/local/etc/php/conf.d/docker-php-ext-xdebug-enable.ini"
else
	run_command "rm -rf /usr/local/etc/php/conf.d/docker-php-ext-xdebug-enable.ini"
fi

if [ -n "$PHP_EXTENSIONS_ENABLE" ]; then
	run_command "docker-php-ext-enable $PHP_EXTENSIONS_ENABLE"
fi

if [ -n "$DOWNGRADE_OPENSSL_TLS_AND_SECLEVEL" ]; then
	run_command "sed -i 's,^\(MinProtocol[ ]*=\).*,\1'TLSv1',g' /etc/ssl/openssl.cnf"
    run_command "sed -i 's,^\(CipherString[ ]*=\).*,\1'DEFAULT@SECLEVEL=1',g' /etc/ssl/openssl.cnf"
fi
run_command "echo '$USER:$USER_PASS' |chpasswd"
run_command "echo 'root:$ROOT_PASS' |chpasswd"
run_command "service ssh start"
exec docker-php-entrypoint "$@"
