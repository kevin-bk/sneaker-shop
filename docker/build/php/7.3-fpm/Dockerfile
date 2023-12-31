FROM php:7.3-fpm-buster

MAINTAINER rogerdz88@hotmail.com

COPY docker-entrypoint.sh /docker-custom-entrypoint.sh
COPY config/global.conf /usr/local/etc/php-fpm.d/zz-global.conf
COPY config/xdebug2.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN apt-get update && apt-get install -y \
    nano msmtp gnupg \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libicu-dev \
    libxml2-dev \
    libxslt-dev \
    libzip-dev \
    libmagickwand-dev \
    --no-install-recommends \
    && docker-php-ext-configure gd \
        --with-gd \
        --with-freetype-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd opcache bcmath pdo_mysql soap zip xsl intl sockets mysqli pcntl \
    # update sodium
    && rm -f /usr/local/etc/php/conf.d/*sodium.ini \
    && rm -f /usr/local/lib/php/extensions/*/*sodium.so \
    && apt-get remove libsodium* -y  \
    && mkdir -p /tmp/libsodium  \
    && curl -sL https://github.com/jedisct1/libsodium/archive/1.0.18-RELEASE.tar.gz | tar xzf - -C  /tmp/libsodium \
    && cd /tmp/libsodium/libsodium-1.0.18-RELEASE/ \
    && ./configure \
    && make && make check \
    && make install  \
    # end
    && cd / \
    && pecl install xdebug-2.9.8 redis libsodium imagick \
    && docker-php-ext-enable redis sodium imagick \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --version=1.10.20 --filename=composer \
    && ln -s /usr/local/bin/php /usr/bin/php \
    && ln -s /usr/bin/msmtp /usr/sbin/sendmail \
    # install blackfire
    && version=$(php -r "echo PHP_MAJOR_VERSION.PHP_MINOR_VERSION;") \
    && architecture=$(case $(uname -m) in i386 | i686 | x86) echo "i386" ;; x86_64 | amd64) echo "amd64" ;; aarch64 | arm64 | armv8) echo "arm64" ;; *) echo "amd64" ;; esac) \
    && curl -A "Docker" -o /tmp/blackfire-probe.tar.gz -D - -L -s https://blackfire.io/api/v1/releases/probe/php/linux/$architecture/$version \
    && mkdir -p /tmp/blackfire \
    && tar zxpf /tmp/blackfire-probe.tar.gz -C /tmp/blackfire \
    && mv /tmp/blackfire/blackfire-*.so $(php -r "echo ini_get ('extension_dir');")/blackfire.so \
    # end
    # install ioncube
    && cd /tmp \
    && curl -O https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz \
    && tar zxvf ioncube_loaders_lin_x86-64.tar.gz \
    && export PHP_VERSION=$(php -r "echo PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;") \
    && export PHP_EXT_DIR=$(php-config --extension-dir) \
    && cp "./ioncube/ioncube_loader_lin_${PHP_VERSION}.so" "${PHP_EXT_DIR}/ioncube.so" \
    # end
    && chmod +x /docker-custom-entrypoint.sh \
    && sed -i 's/^listen = .*/listen = \/var\/run\/php\/php73.sock/' /usr/local/etc/php-fpm.d/zz-docker.conf \
    && sed -i 's/^;listen.owner = .*/listen.owner = www-data/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^;listen.group = .*/listen.group = www-data/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^;listen.mode = .*/listen.mode = 0660/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^pm = .*/pm = ondemand/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^pm.max_children = .*/pm.max_children = 10/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^;request_slowlog_timeout = .*/request_slowlog_timeout = 10s/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^;slowlog = .*/slowlog = \/var\/log\/php-fpm\/php73-slow.log/' /usr/local/etc/php-fpm.d/www.conf \
    && mkdir -p /var/log/php-fpm/ \
    # install mssql extension
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/10/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update \
    && ACCEPT_EULA=Y apt-get install -y msodbcsql17 unixodbc-dev --no-install-recommends \
    && pecl install sqlsrv pdo_sqlsrv \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv \
    # end
    && apt-get -y purge  \
        --auto-remove gnupg unixodbc-dev \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

ENTRYPOINT ["/docker-custom-entrypoint.sh"]

CMD ["php-fpm"]