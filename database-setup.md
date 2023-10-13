## SETTING UP EXTERNAL DATABASE ACCES
```bash
ufw allow in on pterodactyl0 to 172.18.0.1 port 3306 proto tcp
```

```bash
nano /etc/mysql/mariadb.conf.d/50-server.cnf # change 127.0.0.1 to 0.0.0.0
```
```bash
find /etc -iname my.cnf # Open my.cnf, add text below to the bottom of the file and save it:

[mysqld]
bind-address=0.0.0.0
```

### RESTARTING MARIADB
```bash
systemctl restart mariadb
```

## SETTING UP A DATABASE HOST
#### CHANGE PASSWORD-HERE TO AN ACTUAL AND SECURE PASSWORD!
```bash
CREATE USER 'pterodactyluser'@'%' IDENTIFIED BY 'PASSWORD-HERE'; 
GRANT ALL PRIVILEGES ON *.* TO 'pterodactyluser'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
```
