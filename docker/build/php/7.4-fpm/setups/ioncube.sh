#!/bin/bash
set -e

cd /tmp \
    && curl -O https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz \
    && tar zxvf ioncube_loaders_lin_x86-64.tar.gz \
    && export PHP_VERSION=$(php -r "echo PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;") \
    && export PHP_EXT_DIR=$(php-config --extension-dir) \
    && cp "./ioncube/ioncube_loader_lin_${PHP_VERSION}.so" "${PHP_EXT_DIR}/ioncube.so"