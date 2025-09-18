#!/bin/sh
set -e

# Limpiar caches previos
php artisan config:clear || true
php artisan cache:clear || true
php artisan route:clear || true
php artisan view:clear || true

# Generar caches solo si existe APP_KEY
if [ -n "$APP_KEY" ]; then
  php artisan config:cache || true
  php artisan route:cache || true
  php artisan view:cache || true
fi

# Ejecutar el CMD
exec "$@"
