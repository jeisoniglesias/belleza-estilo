#!/bin/sh
echo "Waiting for MySQL..."
dockerize -wait tcp://db:3306 -timeout 60s
echo "MySQL is up - executing command"
php artisan migrate --force
echo "Starting services..."
service php8.2-fpm start
nginx -g "daemon off;" &
echo "Ready."
tail -s 1 /var/log/nginx/*.log -f
