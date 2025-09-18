# Imagen base de PHP 8.2 con Composer
FROM php:8.2-cli

# Instalar dependencias del sistema necesarias para PostgreSQL, ZIP, Node y Vite
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libpng-dev nodejs npm \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip gd

# Instalar Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /app

# Copiar solo archivos de dependencias primero (cache eficiente)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

COPY package.json package-lock.json* vite.config.js ./
RUN npm install && npm run build

# Copiar el resto de la app
COPY . .

# Limpiar y cachear configuración de Laravel
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Puerto dinámico de Render
CMD php artisan serve --host=0.0.0.0 --port=$PORT
