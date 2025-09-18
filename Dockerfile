# Etapa 1: construir dependencias y assets
FROM node:20 AS node-build
WORKDIR /app

# Copiar archivos de Node
COPY package.json package-lock.json* vite.config.js ./
COPY resources ./resources

# Instalar dependencias y compilar
RUN npm install && npm run build

# Etapa 2: PHP con Composer y Laravel
FROM php:8.2-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libpng-dev \
    && docker-php-ext-install pdo pdo_pgsql zip gd bcmath \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copiar composer y dependencias primero (cache eficiente)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Copiar todo el código
COPY . .

# Copiar build de Vite desde etapa Node
COPY --from=node-build /app/public/build ./public/build

# Permisos para Laravel
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && touch storage/logs/laravel.log \
    && chown www-data:www-data storage/logs/laravel.log

# Caches de Laravel
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

# Puerto dinámico de Render
CMD php artisan serve --host=0.0.0.0 --port=$PORT
