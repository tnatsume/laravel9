FROM php:8.1-fpm-buster

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer

COPY --from=composer:2.3.9 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
    apt-get -y install --no-install-recommends git unzip libzip-dev libicu-dev libonig-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev libgmp-dev libldap2-dev netcat sqlite3 libsqlite3-dev && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    docker-php-ext-install intl pdo_mysql zip bcmath -j$(nproc) gd && \
    docker-php-ext-configure gd --with-freetype --with-jpeg 

COPY ./php.ini /usr/local/etc/php/php.ini

USER root
RUN apt update
RUN apt-get remove  supervisor --yes
RUN apt-get install  supervisor --yes

WORKDIR /data

RUN apt-get install -y procps nmap iproute2
ENTRYPOINT ["supervisord", "-c", "/etc/supervisor/supervisord.conf"]
