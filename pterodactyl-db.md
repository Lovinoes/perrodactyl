### external db acces or something
```bash
firewall-cmd --permanent --zone=public --add-source=172.18.0.1
```

```bash
nano /etc/my.cnf.d/mariadb-server.cnf # change 127.0.0.1 to 0.0.0.0
```

```bash
nano /etc/my.cnf

[mysqld]
bind-address=0.0.0.0
```

```bash
# restart mariadb like funni
systemctl restart mariadb
```

```bash
# now create your database host
# reminder: replace PASSWORD-HERE with an actual and **secure** password
CREATE USER 'pterodactyluser'@'%' IDENTIFIED BY 'PASSWORD-HERE'; 
GRANT ALL PRIVILEGES ON *.* TO 'pterodactyluser'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
```
