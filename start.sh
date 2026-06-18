#!/bin/bash
sed -i "s/\$PORT/$PORT/g" /etc/nginx/nginx.conf
php-fpm -D
nginx -g "daemon off;"
