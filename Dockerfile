FROM php:7.2.6-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli
RUN  docker-php-ext-enable mysqli

