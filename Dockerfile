FROM php:7.2.10-fpm

RUN apt-get update \
    && apt-get install -y --no-install-recommends vim curl debconf subversion git apt-transport-https apt-utils \
    build-essential locales acl mailutils wget zip unzip \
    gnupg gnupg1 gnupg2

COPY .docker/php/php.ini /etc/php/7.2.10/php.ini
COPY .docker/php/php-fpm-pool.conf /etc/php/7.2.10/pool.d/www.conf

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer

RUN rm -rf /var/lib/apt/lists/*
RUN rm -rf /var/lib/apt/lists/*
RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen
#EXPOSE 9000
FROM httpd:2.4

COPY httpd.conf /etc/apache2/httpd.conf

#COPY . /app/
#COPY ./ /usr/local/apache2/htdocs/Example
COPY ./ /var/www/

EXPOSE 8080
#CMD ["php"]
#CMD ["httpd-foreground"]