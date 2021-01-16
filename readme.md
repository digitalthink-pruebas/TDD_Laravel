#Curso: crea una aplicación con Laravel
https://styde.net/curso-crea-una-aplicacion-con-laravel-5-3/

## Capitulo 2 de 70. Instalación y configuración del proyecto
-------------------------------------------------------------
    composer create-project laravel/laravel foro "5.3.*"

    Nota: Si se clona el proyecto en lugar de crearlo desde 0 hay que hacer 4 pasos

        1. Copiar archivo .env.example como archivo .env
        2. Crear clave del proyecto
            php artisan key:generate
        3. Instalar dependencias de composer
            composer install
        4. Instalar librerías de frontend
            npm install

    Crear base de datos foro

    Crear autenticación
        php artisan make:auth

    Crear tablas
        php artisan migrate

    Nota: Solucionado error 'Variable ‘sql_mode’ can’t be set to the value' poniendo 'strict' => false, en el archivo config/database.php
        Laravel Framework version 5.3.31 (comando php artisan --version)
        PHP: 7.1.16 (comando php -v)

    Cambiar nombre de la aplicación (app.php)
        'name' => 'Foro',

    Descarga las traducciones a español desde el repositorio de GitHub https://github.com/caouecs/Laravel-lang y configura la clave locale en el archivo config/app.php

        Instalación vía composer: composer require laravel-lang/lang:~2.0

        Copiar carpeta src/es en resources/lang de nuestro proyecto

        Configurar idioma español (app.php)
            'locale' => 'es',

    Instalar paquete Styde/html en versión 1.2
        composer require "styde/html=~1.2

        En app.php
            Styde\Html\HtmlServiceProvider::class,

    Ejecutar pruebas
        vendor/bin/phpunit

    Instalar paquete Laravel Markdown
        composer require graham-campbell/markdown:^9.0

    Añadir a git
        git init
        git add .
        git commit -m "Capitulo 2 de 70. Instalación y configuración del proyecto"
        git branch -M main
        git push -u origin main
