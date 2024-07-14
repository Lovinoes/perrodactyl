## File Overview

The repository contains the following files:
- **[config.jsonc](https://github.com/Lovinoes/storage/blob/main/config.jsonc):** Configuration file for fastfetch
- **[nginx.conf](https://github.com/Lovinoes/storage/blob/main/nginx.conf):** Configuration file for NGiNX (user:group = www-data:www-data btw.)
- **[jellyfin.conf](https://github.com/Lovinoes/storage/blob/main/jellyfin.conf):** Configuration file for jellyfin <- nginx
- **[vaultwarden.conf](https://github.com/Lovinoes/storage/blob/main/vaultwarden.conf):** Configuration file for vaultwarden <- nginx
- **[my.cnf](https://github.com/Lovinoes/storage/blob/main/my.cnf):** Configuration file for MySQL/MariaDB
- **[darknred.sh](https://github.com/Lovinoes/storage/blob/main/darknred.sh):** Theme Installer for Pterodactyl ([Sigma-Production](https://github.com/Sigma-Production/PteroFreeStuffinstaller/tree/v2.0?tab=readme-ov-file)) ([NodeJS](https://github.com/nodesource/distributions) is required)
- **[update.sh](https://github.com/Lovinoes/storage/blob/main/update.sh):** Update script for Pterodactyl
- **[update_v2.sh](https://github.com/Lovinoes/storage/blob/main/update_v2.sh):** Version 2 of the update script. This is one of my first Bash scripts. *lol*
- 
```bash
bash <(curl https://raw.githubusercontent.com/Lovinoes/storage/main/update.sh)
```
```bash
bash <(curl https://raw.githubusercontent.com/Lovinoes/storage/main/darknred.sh)
```

## License
This repository is licensed under the MIT License. See the [LICENSE](https://github.com/Lovinoes/storage/blob/main/LICENSE) file for more information.

## Contact
If you have any questions, feel free to contact me at lovinoes@lovinoes.de
