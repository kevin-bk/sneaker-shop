#!/bin/bash
set -e

apt-get update \
    && ACCEPT_EULA=Y apt-get install -y msodbcsql17 unixodbc-dev --no-install-recommends \
    && pecl install sqlsrv-$SQLSRV_VERSION pdo_sqlsrv-$SQLSRV_VERSION \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv \
    && rm -rf  /usr/local/etc/php/conf.d/*-pdo_sqlsrv.ini \
    && rm -rf  /usr/local/etc/php/conf.d/*-sqlsrv.ini