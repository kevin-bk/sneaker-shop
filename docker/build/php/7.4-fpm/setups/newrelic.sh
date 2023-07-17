#!/bin/bash
set -e

export NEWRELIC_VERSION="$(curl -sS https://download.newrelic.com/php_agent/release/ | sed -n 's/.*>\(.*linux\).tar.gz<.*/\1/p')" \
    && curl -L https://download.newrelic.com/php_agent/release/${NEWRELIC_VERSION}.tar.gz | tar -zxC /tmp \
    && export NR_INSTALL_USE_CP_NOT_LN=1 \
    && export NR_INSTALL_SILENT=1 \
    && /tmp/newrelic-php5-*/newrelic-install install \
    && rm -rf /usr/local/etc/php/conf.d/newrelic.ini \
    && rm -rf /tmp/newrelic-php5-* /tmp/nrinstall* \
    && chmod 777 /var/log/newrelic