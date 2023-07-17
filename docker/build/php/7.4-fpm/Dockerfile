FROM php:7.4-fpm-buster

MAINTAINER phanvanbao95@hotmail.com

ENV XDEBUG_VERSION 2.9.8
ENV SQLSRV_VERSION 5.9.0
ENV LANG C.UTF-8

ARG DEBIAN_FRONTEND=noninteractive

COPY docker-entrypoint.sh /docker-custom-entrypoint.sh
COPY config/global.conf /usr/local/etc/php-fpm.d/zz-global.conf
COPY config/xdebug2.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
COPY setups /tmp/setups

RUN apt-get update && apt-get install -y \
    nano msmtp msmtp-mta gnupg \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libicu-dev \
    libxml2-dev \
    libxslt-dev \
    libzip-dev \
    libmagickwand-dev \
    libyaml-dev \
    --no-install-recommends \
    && docker-php-ext-configure gd \
        --with-freetype=/usr/include/ \
        --with-jpeg=/usr/include/ \
    && docker-php-ext-install gd opcache bcmath pdo_mysql soap zip xsl intl sockets mysqli pcntl \
    && bash /tmp/setups/sodium.sh \

    && cd / \
    && pecl install xdebug-$XDEBUG_VERSION redis libsodium imagick yaml \
    && docker-php-ext-enable redis sodium imagick yaml \
    && ln -s /usr/local/bin/php /usr/bin/php \

    && bash /tmp/setups/blackfire.sh \
    && bash /tmp/setups/pdo_dblib.sh \
    && bash /tmp/setups/ioncube.sh \
    && bash /tmp/setups/newrelic.sh \

    && chmod +x /docker-custom-entrypoint.sh \

    && sed -i 's/^listen = .*/listen = \/var\/run\/php\/php74.sock/' /usr/local/etc/php-fpm.d/zz-docker.conf \
    && sed -i 's/^;listen.owner = .*/listen.owner = www-data/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^;listen.group = .*/listen.group = www-data/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^;listen.mode = .*/listen.mode = 0660/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^pm = .*/pm = ondemand/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^pm.max_children = .*/pm.max_children = 10/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^;request_slowlog_timeout = .*/request_slowlog_timeout = 10s/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^;slowlog = .*/slowlog = \/var\/log\/php-fpm\/php74-slow.log/' /usr/local/etc/php-fpm.d/www.conf \
    && mkdir -p /var/log/php-fpm/ \
    && mkdir -p /var/run/php/ \

    # install mssql extension
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/10/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && bash /tmp/setups/sqlsrv.sh \
    # end

    # remove unused package
    && apt-get -y purge --auto-remove gnupg \
    && apt-get autoremove  --yes \
    && bash /tmp/setups/clean.sh \
    && rm -rf tmp/*

ENTRYPOINT ["/docker-custom-entrypoint.sh"]

CMD ["php-fpm"]