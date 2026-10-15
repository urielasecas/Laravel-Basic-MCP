#!/bin/sh
set -e
cd /var/www/html
if [ -f artisan ]; then
    mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views bootstrap/cache
    chown -R www-data:www-data storage bootstrap/cache
    chmod -R ug+rwX storage bootstrap/cache
fi
exec "$@"
