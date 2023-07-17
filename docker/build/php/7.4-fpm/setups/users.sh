#!/bin/bash
set -e

useradd -ms /bin/bash dev \
    && echo 'dev  ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers