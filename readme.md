#Curso: crea una aplicación con Laravel
https://styde.net/curso-crea-una-aplicacion-con-laravel-5-3/

[ ![Codeship Status for digitalthink-pruebas/foro](https://app.codeship.com/projects/724050e0-92f7-40aa-92a0-326e63e4bf24/status?branch=main)](https://app.codeship.com/projects/424201)

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
        git remote add origin https://github.com/digitalthink-pruebas/TDD_Laravel.git
        git push -u origin main

## Capitulo 3 de 70. Configuración para el entorno de pruebas automatizadas (PHPUnit)
-------------------------------------------------------------------------------------
    Crear base de datos para test foro_tests
    Definir clave 'mysql_test' en archivo database.php
    Crear archivo .env.test y copiar el contenido de .env y cambiar para que la base de datos apunte a la base de datos de tests

        DB_CONNECTION=mysql_test
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=foro_test
        DB_USERNAME=root
        DB_PASSWORD=noesilva

    Crear migraciones (el parámetro --env le indica que tome la configuración del archivo .env.test)
        php artisan migrate --env=test
        Nota: Si queremos borrar la BBDD y ejecutar todas las migraciones, ejecutar php artisan db:refresh migrate --env=test

    Configurar el archivo de pruebas (phpunit.xml)
        <env name="DB_CONNECTION" value="mysql_test"/>

    Ejecutar pruebas
        vendor/bin/phpunit
    Nota: Puede definirse un alias que nos ahorre tiempo
        alias t=vendor/bin/phpunit
        Ver https://styde.net/alias-de-comandos-para-la-consola-windowslinuxmac/ para obtener más información sobre la definición de alias.

    Probar las pruebas de la API (ExampleTest.php)

    Se utiliza el trait DatabaseTransactions para que cada prueba sea una transacción y se haga rollback al final de cada una de ellas, por lo que no se altera la base de datos.

   Añadir a git
        git add .
        git commit -m "Capitulo 3 de 70. Configuración para el entorno de pruebas automatizadas (PHPUnit)"
        git push -u origin main

## Capitulo 4 de 70. Creación y configuración de un repositorio de Git para nuestro proyecto en Laravel 5.3
-----------------------------------------------------------------------------------------------------------
        Crear una rama en Github por cada lección del proyecto
        
            git checkout -b capitulo4
        
            Añadir a git
                git add .
                git commit -m "Capitulo Capitulo 4 de 70. Creación y configuración de un repositorio de Git para nuestro proyecto en Laravel 5.3"
                git push -u origin capitulo4

## Capitulo 5 de 70. Integración continua con Codeship y GitHub en un proyecto de Laravel 5.3
---------------------------------------------------------------------------------------------
        Creación de cuenta en Codeship (codeship.com)

        ### Comandos para construir el proyecto en Codeship
        phpenv local 7.0
        mysql -e 'create database foro_tests;'
        composer install --prefer-dist --no-interaction
        cp .env.codeship .env
        php artisan migrate --force

        ### Comando para ejecutar las pruebas
        vendor/bin/phpunit

        Crear archivo .env.codeship

        Añadir a git
           git add .
           git commit -m "Integración continua con Codeship y GitHub en un proyecto de Laravel 5.3"
           git push -u origin main

## Capitulo 6 de 70. Recibe notificaciones de eventos de Github y Codeship en un canal de Slack
-----------------------------------------------------------------------------------------------
Nada que subir

