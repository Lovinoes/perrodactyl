#!/bin/bash

cd /var/www/pterodactyl
export NODE_OPTIONS=--openssl-legacy-provider

php artisan down
sudo curl https://raw.githubusercontent.com/Sigma-Production/PteroFreeStuffinstaller/V1.10.1/resources/DarkNRed/DarkNRed.tar.gz | sudo tar -xz
if ! command -v yarn -v &> /dev/null
then
    npm i -g yarn
fi
yarn
yarn build:production
chown -R nginx:nginx /var/www/pterodactyl/*

php artisan view:clear
php artisan config:clear
php artisan up

echo ""
echo "<- DarkNRed theme has been added successfully. ->"
echo "<- Credits: https://github.com/Sigma-Production/PteroFreeStuffinstaller ->"
echo ""
