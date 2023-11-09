cd /var/www/pterodactyl
php artisan down

sudo curl https://raw.githubusercontent.com/Sigma-Production/PteroFreeStuffinstaller/V1.10.1/resources/DarkNRed/DarkNRed.tar.gz | sudo tar -xz
#clear
cd /var/www/pterodactyl

if ! command -v yarn -v &> /dev/null
then
    npm i -g yarn
fi
yarn
export NODE_OPTIONS=--openssl-legacy-provider
yarn build:production
#clear
chown -R nginx:nginx /var/www/pterodactyl/*
php artisan view:clear
php artisan config:clear
php /var/www/pterodactyl/artisan up
echo "DarkNRed Theme ""erfolgreich"" hinzugefügt"
echo "Credits: https://github.com/Sigma-Production/PteroFreeStuffinstaller"
