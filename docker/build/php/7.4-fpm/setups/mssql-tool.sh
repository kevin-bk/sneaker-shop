#!/bin/bash
set -e

ACCEPT_EULA=Y apt-get install -y mssql-tools --no-install-recommends \
    && ln -sfn /opt/mssql-tools/bin/sqlcmd /usr/bin/sqlcmd \
    && ln -sfn /opt/mssql-tools/bin/bcp /usr/bin/bcp