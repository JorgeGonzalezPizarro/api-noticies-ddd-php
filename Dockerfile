FROM php:7.2

RUN apt-get update \
    && apt-get install -y --no-install-recommends vim curl debconf subversion git apt-transport-https apt-utils \
    build-essential locales acl mailutils wget zip unzip \
    gnupg gnupg1 gnupg2

COPY .docker/php/php.ini /etc/php/7.2.3/php.ini
COPY .docker/php/php-fpm-pool.conf /etc/php/7.2.3/pool.d/www.conf

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer
ENV DISPLAY_ERRORS="On"

RUN rm -rf /var/lib/apt/lists/*
RUN rm -rf /var/lib/apt/lists/*
RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen
ADD httpd.conf /etc/apache2/httpd.conf

ADD . /app/index.php

EXPOSE 8080

WORKDIR /app
EXPOSE 8080
CMD ["php"]