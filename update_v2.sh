#!/bin/bash

PANEL_DIR="/var/www/pterodactyl"
export COMPOSER_ALLOW_SUPERUSER=1
export NODE_OPTIONS=--openssl-legacy-provider

# handle errors
error_exit() {
    echo "Error: $1"
    echo "Update failed. Please check the script for details."
    exit 1
}

cd "$PANEL_DIR" || error_exit "Failed to change directory to $PANEL_DIR"

# start
echo "Starting Pterodactyl panel update..."
php artisan down || error_exit "Failed to put the application into maintenance mode"
echo "Removing resources/ public/ node_modules/"
rm -rf resources/ public/ node_modules/ || error_exit "Failed to remove old resources"

echo "Downloading and extracting the latest Pterodactyl panel release..."
curl -L https://github.com/pterodactyl/panel/releases/latest/download/panel.tar.gz | tar -xzv || error_exit "Failed to download or extract the latest release"
#
echo "Setting permissions..."
chmod -R 755 storage/* bootstrap/cache || error_exit "Failed to set permissions"
#
echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-plugins || error_exit "Failed to install Composer dependencies"
#
echo "Clearing view and config cache..."
php artisan view:clear || error_exit "Failed to clear view cache"
php artisan config:clear || error_exit "Failed to clear config cache"
#
echo "Running database migrations and seeders..."
php artisan migrate --seed --force || error_exit "Failed to run database migrations and seeders"

# Change ownership of the files
echo "Changing file ownership..."
if [[ -f /etc/redhat-release ]]; then
    chown -R nginx:nginx "$PANEL_DIR"/* || error_exit "Failed to change file ownership to nginx:nginx"
elif [[ -f /etc/debian_version ]]; then
    chown -R www-data:www-data "$PANEL_DIR"/* || error_exit "Failed to change file ownership to www-data:www-data"
else
    error_exit "Unsupported OS"
fi

# Install Node.js dependencies using Yarn
echo "Installing Node.js dependencies..."
yarn || error_exit "Failed to install Node.js dependencies"

# end
echo "Restarting queue workers..."
php artisan queue:restart || error_exit "Failed to restart queue workers"
echo "Bringing the application back up..."
php artisan up || error_exit "Failed to bring the application back up"
echo ""
echo "Updated Pterodactyl panel successfully."
echo ""
