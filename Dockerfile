FROM php:8.2-apache

RUN a2enmod rewrite \
  && service apache2 restart


