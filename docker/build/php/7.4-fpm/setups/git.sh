#!/bin/bash
set -e

git config --system core.fileMode false \
    && git config --system core.autocrlf false \
    && git config --system core.eol input \
    && git config --system credential.helper cache \
    && git config --system credential.helper 'cache --timeout=7200'

