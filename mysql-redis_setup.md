## SETTING UP EXTERNAL DATABASE ACCES

ufw allow from 172.16.0.0/14

nano /etc/mysql/mariadb.conf.d/50-server.cnf
(127.0.0.1 to 0.0.0.0)

find /etc -iname my.cnf
Open my.cnf, add text below to the bottom of the file and save it:

[mysqld]
bind-address=0.0.0.0

## RESTARTING MARIADB

systemctl restart mysql
systemctl restart mariadb



## CREATING A DATABASE FOR PTERODACTYL

mysql -u root -p
use mysql;

CREATE USER 'pterodactyl'@'%' IDENTIFIED BY 'PASSWORD-HERE';
CREATE DATABASE panel;
GRANT ALL PRIVILEGES ON panel.* TO 'pterodactyl'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;


## SETTING UP A DATABASE HOST

CREATE USER 'pterodactyluser'@'%' IDENTIFIED BY 'PASSWORD-HERE';
GRANT ALL PRIVILEGES ON *.* TO 'pterodactyluser'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
