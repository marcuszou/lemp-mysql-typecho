FROM php:8.1-fpm

# Installing dependencies for the PHP modules
RUN apt-get update
RUN apt-get install -y git curl nano libbz2-dev libzip-dev libcurl3-dev libssl-dev libjpeg62-turbo-dev libpng-dev libonig-dev libxml2-dev unzip zip
# libonig-dev is needed for oniguruma which is needed for mbstring

# Installing additional PHP modules
RUN docker-php-ext-install curl gd mbstring mysqli pdo pdo_mysql xml zip

# Install and configure ImageMagick
RUN apt-get install -y libmagickwand-dev
RUN pecl install imagick
RUN docker-php-ext-enable imagick
RUN apt-get purge -y libmagickwand-dev

# Install Composer so it's available
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
