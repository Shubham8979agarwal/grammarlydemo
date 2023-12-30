#!/usr/bin/env bash
echo "Running composer"
#composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

#!/bin/sh
cd /var/www 
php artisan migrate:fresh --seed
php artisan serve --host=0.0.0.0 --port=$APP_PORT