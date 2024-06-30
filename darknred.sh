#!/bin/bash

cd /var/www/pterodactyl
export NODE_OPTIONS=--openssl-legacy-provider

php artisan down
sudo curl https://raw.githubusercontent.com/Sigma-Production/PteroFreeStuffinstaller/v2.0/resources/DarkNRed/DarkNRed.tar.gz | sudo tar -xz
if ! command -v yarn -v &> /dev/null
then
    npm i -g yarn
fi
yarn
yarn build:production
# Change ownership of the files
if [[ -f /etc/redhat-release ]]; then
    chown -R nginx:nginx /var/www/pterodactyl/* || { echo "Failed to change file ownership"; exit 1; }
elif [[ -f /etc/debian_version ]]; then
    chown -R www-data:www-data /var/www/pterodactyl/* || { echo "Failed to change file ownership"; exit 1; }
fi

php artisan view:clear
php artisan config:clear
php artisan up

echo ""
echo "<- DarkNRed theme has been added successfully. ->"
echo "<- Credits: https://github.com/Sigma-Production/PteroFreeStuffinstaller ->"
echo ""
