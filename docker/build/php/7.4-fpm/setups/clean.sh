#!/bin/bash
set -e

apt-get clean \
    && rm -rf /var/lib/apt/lists/* /var/tmp/* /usr/share/doc/* \
    && rm /var/log/lastlog /var/log/faillog