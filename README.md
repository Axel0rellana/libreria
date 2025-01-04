# Library admin panel

## Repositorio de la aplicación web Library admin panel hecha en Laravel.

### Comandos

#### Crear proyecto

- composer create-project laravel/laravel libreria

#### Generar APK KEY

- php artisan key:generate

#### Generar migraciones

- php artisan make:migration categorias
- php artisan make:migration libros

#### Subir migraciones a la base de datos

- php artisan migrate

#### Consultar la lista de rutas

- php artisan route:list

#### Abrir un enlace para comunicarse con la carpeta storage

- php artisan storage:link

#### Instalar laravel/ui para la interfaz de la aplicación

- composer require laravel/ui

#### Integrar bootstrap y la autenticación

- php artisan ui bootstrap --auth

#### Instalar Generador de cruds

- composer require ibex/crud-generator --dev

#### Publicar la configuración por defecto de los paquetes

- php artisan vendor:publish --tag=crud

#### Crear cruds

- php artisan make:crud categorias
- php artisan make:crud libros

#### Instalar DomPDF

- composer require barryvdh/laravel-dompdf