#!/bin/bash
set -e

apt-get install -y freetds-dev --no-install-recommends \
    && ln -s /usr/lib/x86_64-linux-gnu/libsybdb.so /usr/lib/libsybdb.so \
    && docker-php-ext-install pdo_dblib \
    && rm -rf  /usr/local/etc/php/conf.d/*-pdo_dblib.ini \