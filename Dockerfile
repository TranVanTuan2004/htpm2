FROM php:8.1-apache

# Cài PDO và MySQL driver
RUN docker-php-ext-install pdo pdo_mysql

# Tùy chọn: Copy mã nguồn vào container nếu cần
COPY . /var/www/html
