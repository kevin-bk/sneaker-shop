#!/bin/sh
set -e

# start cron
echo $ROOT_PASS | su -c  "service cron start"

# start ssh
echo $ROOT_PASS | su -c  "service ssh start"

if [ -n "$UID" ] && [ -n "$GID" ]; then
	echo $ROOT_PASS | su -c  "usermod -u $UID $USER && groupmod -g $GID $USER"
fi

exec "$@"