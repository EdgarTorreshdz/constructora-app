# Imagen base de PHP 8.2 con Composer
FROM php:8.2-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libpng-dev nodejs npm \
    && docker-php-ext-install pdo pdo_pgsql zip gd bcmath

# Instalar Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /app

# ---- Etapa 1: Composer deps
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts

# ---- Etapa 2: Node deps
COPY package.json package-lock.json* vite.config.js ./
RUN npm install

# ---- Etapa 3: copiar todo el código
COPY . .

# ---- Etapa 4: build frontend
RUN npm run build \
    && ls -la public/build   # 👈 verifica que exista manifest.json

# Ejecutar scripts de composer
RUN composer run-script post-autoload-dump || true

# Permisos para Laravel
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && touch storage/logs/laravel.log \
    && chown www-data:www-data storage/logs/laravel.log

# Entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

# Puerto dinámico de Render
CMD php artisan serve --host=0.0.0.0 --port=$PORT
