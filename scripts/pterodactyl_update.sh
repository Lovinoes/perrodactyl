#!/bin/bash

cd /var/www/pterodactyl
export COMPOSER_ALLOW_SUPERUSER=1

# start
php artisan down
rm -rf resources/ public/ node_modules/

curl -L https://github.com/pterodactyl/panel/releases/latest/download/panel.tar.gz | tar -xzv
chmod -R 755 storage/* bootstrap/cache
composer install --no-dev --optimize-autoloader --no-plugins
php artisan view:clear
php artisan config:clear
php artisan migrate --seed --force

# Change ownership of the files
if [[ -f /etc/redhat-release ]]; then
    chown -R nginx:nginx /var/www/pterodactyl/* || { echo "Failed to change file ownership"; exit 1; }
elif [[ -f /etc/debian_version ]]; then
    chown -R www-data:www-data /var/www/pterodactyl/* || { echo "Failed to change file ownership"; exit 1; }
fi

# end
php artisan queue:restart
php artisan up
echo ""
echo "Updated Pterodactyl Panel"
echo ""
