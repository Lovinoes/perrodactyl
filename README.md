## File Overview

The repository contains the following files:
- **[config.jsonc](https://github.com/Lovinoes/storage/blob/main/config.jsonc):** Configuration file for fastfetch
- **[nginx.conf](https://github.com/Lovinoes/storage/blob/main/nginx.conf):** Configuration file for NGiNX
- **[my.cnf](https://github.com/Lovinoes/storage/blob/main/my.cnf):** Configuration file for MySQL/MariaDB
- **[darknred.sh](https://github.com/Lovinoes/storage/blob/main/darknred.sh):** Theme Installer for Pterodactyl ([Sigma-Production](https://github.com/Sigma-Production/PteroFreeStuffinstaller?tab=readme-ov-file)) ([NodeJS](https://github.com/nodesource/distributions) is required)
- **[update.sh](https://github.com/Lovinoes/storage/blob/main/update.sh):** Update script for Pterodactyl
```bash
bash <(curl https://raw.githubusercontent.com/Lovinoes/storage/main/update.sh)
# If you are using Debian, Ubuntu etc.
# make sure you run `chown -R nginx:nginx /var/www/pterodactyl/*` after the update.
```
```bash
bash <(curl https://raw.githubusercontent.com/Lovinoes/storage/main/darknred.sh)
# If you are using Debian, Ubuntu etc.
# make sure you run `chown -R nginx:nginx /var/www/pterodactyl/*` after the Installation.
```

## License
This repository is licensed under the MIT License. See the [LICENSE](https://github.com/Lovinoes/storage/blob/main/LICENSE) file for more information.

## Contact
If you have any questions, feel free to contact me at lovinoes@lovinoes.de
