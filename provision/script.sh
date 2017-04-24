#!/bin/bash

cat /vagrant/provision/files/hosts > /etc/hosts
timedatectl set-timezone Europe/Kiev

apt-get update && apt-get install -y mc ccze git htop

cat /vagrant/provision/files/vhost > /etc/nginx/sites-available/vhost

apt-get install php-xdebug
cat /vagrant/provision/files/xdebug.ini > /etc/php/7.1/mods-available/xdebug.ini

ln -sf /etc/nginx/sites-available/vhost /etc/nginx/sites-enabled/vhost && systemctl restart php7.1-fpm nginx

# MySQL restore database
# gunzip < /vagrant/mysql/homestead.sql.gz | mysql -u root --password=secret homestead

# setup crontab dump databases
crontab -l > /tmp/mycron
echo "*/15 * * * * /vagrant/provision/files/mysqldump.sh" >> /tmp/mycron
crontab /tmp/mycron
rm /tmp/mycron

#Setup composer
cd /tmp
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php --install-dir=/usr/bin --filename=composer
php -r "unlink('composer-setup.php');"

