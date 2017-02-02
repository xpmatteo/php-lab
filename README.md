
Install and run Docker.app .  Then execute

    docker run -p 8080:80 -v "$PWD/html":/var/www/html php:7.0-apache

