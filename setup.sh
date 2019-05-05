#!/bin/bash

URLBACKEND=docker-backend.test
docker-compose exec php-fpm chown -R www-data:www-data ../backend
docker-compose exec php-fpm php bin/console doctrine:schema:update --force 
docker-compose exec php-fpm php bin/console doctrine:fixtures:load
docker-compose exec php-fpm php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
docker-compose exec php-fpm php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
docker-compose exec php-fpm php composer-setup.php
docker-compose exec php-fpm php -r "unlink('composer-setup.php');"
docker-compose exec php-fpm composer req cors
docker-compose exec php-fpm composer require jwt-auth
sudo  sed -i -e "/$URLFRONTEND/d" /etc/hosts; sudo sed -i "2i127.0.3.1 $URLFRONTEND"  /etc/hosts
sudo  sed -i -e "/$URLBACKEND/d" /etc/hosts; sudo sed -i "2i127.0.3.2 $URLBACKEND" /etc/hosts
echo "DONE \n \n"
echo "The Backend should be accessible at docker-backend.test"

