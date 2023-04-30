FROM php:8.1-apache

#Copying index.php to /var/www/html
COPY . /var/www/html

#installing and enabling mysqli extension for php within docker container
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

#making the user and group to www-data in /var/www/html
RUN chown -R www-data:www-data /var/www/html

#removing write and execute permission for others in index.php
RUN chmod o-wx /var/www/html/index.php
RUN chmod o-wx /var/www/html/total.php
