
Install and run Docker.app .  Then execute

    docker pull php:7.0-apache
    docker run -p 8080:80 -v "$PWD/html":/var/www/html php:7.0-apache

In another terminal tab, execute

    echo 'three plus four is <?= 3 + 4 ?>' > html/index.php

and then open `http://localhost:8080/`
