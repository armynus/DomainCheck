# docker/Dockerfile

FROM php:8.2-fpm

# Cài đặt các dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    unzip

# Cài đặt các PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Tạo thư mục làm việc
WORKDIR /var/www

# Copy mã nguồn vào container
COPY . /var/www

# Tạo các thư mục nếu chưa tồn tại
RUN mkdir -p /var/www/storage /var/www/bootstrap/cache

# Thiết lập quyền cho storage và cache
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache

# Chạy lệnh Composer install
RUN composer install

EXPOSE 9000
CMD ["php-fpm"]
