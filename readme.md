# Laravel + PHP 8.4 + MySQL

La aplicación Laravel vive en `php/src` y se sirve mediante Apache.

- Aplicación: http://localhost:8000
- phpMyAdmin: http://localhost:8080
- MySQL desde el host: `localhost:9906`

## Arranque

```bash
docker compose build
docker compose up -d
```

Dentro de Docker, Laravel usa `db` como host de MySQL, con base de datos y usuario `laravel`, y contraseña `laravel`.

Para ejecutar migraciones manualmente (desde tu local):

```bash
docker compose exec php-apache-environment php artisan migrate
```
