#!/bin/bash
set -e

rm -f /usr/local/etc/php/conf.d/*sodium.ini \
    && rm -f /usr/local/lib/php/extensions/*/*sodium.so \
    && apt-get remove libsodium* -y  \
    && mkdir -p /tmp/libsodium  \
    && curl -sL https://github.com/jedisct1/libsodium/archive/1.0.18-RELEASE.tar.gz | tar xzf - -C  /tmp/libsodium \
    && cd /tmp/libsodium/libsodium-1.0.18-RELEASE/ \
    && ./configure \
    && make && make check \
    && make install