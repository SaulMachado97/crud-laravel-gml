<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instrucciones

Ejecuta los siguientes comandos

Para Linux o Mac:
```
docker run --rm -v “$(pwd)”:/app composer install
```

En Caso de que no funcione usar este
```
docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer install
```

Si usas Windows, mejor este:
```
docker run --rm -v ${pwd}:/app composer install
```

Ahora si a correr: 

```
docker-compose up --build -d
docker-compose exec app php artisan optimize
docker-compose exec app php artisan key:generate
```

Instala depencias NPM
```
npm install
npm run dev
```

Por ultimo, ejecutar migraciones
```
docker-compose exec app php artisan migrate
docker-compose exec app php artisan migrate:fresh --seed --seeder=CategoriasSeeder
```

** Nota **
Hay un archivo comprimido(.zip) que se llama environment.zip en donde esta el archivo .env configurado para la ejecucion del proyecto.



## Urls

El proyecto corre en las siguientes URLs
```
Crud Laravel: http://localhost:8081/
Maillog: http://localhost:8025/
```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
