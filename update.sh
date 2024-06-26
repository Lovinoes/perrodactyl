#!/bin/bash

cd /var/www/pterodactyl
export COMPOSER_ALLOW_SUPERUSER=1

php artisan down
rm -rf resources/ public/ node_modules/

curl -L https://github.com/pterodactyl/panel/releases/latest/download/panel.tar.gz | tar -xzv
chmod -R 755 storage/* bootstrap/cache
composer install --no-dev --optimize-autoloader --no-plugins
php artisan view:clear
php artisan config:clear
php artisan migrate --seed --force
chown -R nginx:nginx /var/www/pterodactyl/*
php artisan queue:restart

php artisan up

echo ""
echo "Updated Pterodactyl panel successfully."
echo ""
