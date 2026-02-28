FROM php:7.4-fpm

# Installer les extensions PHP nécessaires pour MySQL
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html

# Copier le code PHP (optionnel si on monte le volume)
COPY html/ /var/www/html/
