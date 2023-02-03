FROM php:8.1-fpm-buster

USER root
RUN apt update
RUN apt-get install -y supervisor

COPY ./infra/supervisor/supervisord.conf /etc/supervisor/supervisord.conf
COPY ./infra/supervisor/application.conf /etc/supervisor/conf.d/application.conf

CMD ["/usr/bin/supervisord"]

ENV MYSQL_DATABASE=laravel \
    MYSQL_USER=phper \
    MYSQL_PASSWORD=secret \
    MYSQL_ROOT_PASSWORD=secret \
    TZ=Asia/Tokyo
