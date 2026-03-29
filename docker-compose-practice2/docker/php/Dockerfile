FROM php:8.1-fpm

COPY php.ini /usr/local/etc/php/
# php.iniを /usr/local/etc/php/ に作成

RUN apt update
#PHPのパッケージを更新

WORKDIR /var/www
# 作業ディレクトリの指定

RUN docker-php-ext-install pdo_mysql
# MySQLを追加（データベース接続のため）