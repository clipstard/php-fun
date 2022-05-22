FROM php:8.0.6-fpm

RUN cd /usr/local/etc/php/conf.d/ && \
  echo 'memory_limit = 256M' >> /usr/local/etc/php/conf.d/docker-php-ram-limit.ini
