Sistema de Gestión de Imágenes - Laravel
📋 Descripción
Aplicación web desarrollada con Laravel que permite la gestión y visualización de imágenes con dos métodos de acceso diferentes:

Acceso por ID único
Acceso por nombre de archivo
🛠️ Tecnologías Utilizadas
Framework: Laravel 11.x
Lenguaje: PHP 8.2
Base de datos: MySQL
Frontend: Blade (Motor de plantillas de Laravel)
Testing: PHPUnit 11.0
⚙️ Requisitos Previos
PHP >= 8.2
Composer
MySQL/MariaDB
Node.js y NPM (opcional para assets)
🚀 Instalación
Instalar dependencias PHP
´´´bash
composer install
´´´ 
Configuración del entorno
´´´bash
cp .env.example .env
php artisan key:generate
´´´
Configurar base de datos Editar el archivo .env con tus credenciales:
´´´bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=archivosSubidos
DB_USERNAME=user_subir
DB_PASSWORD=root
´´´
Ejecutar migraciones
´´´bash
php artisan migrate
´´´
📝 Características
Subida de imágenes
Almacenamiento seguro
Visualización por ID
Visualización por nombre
Sistema de rutas amigable
🔧 Uso
Acceder a la aplicación a través de http://18.232.80.41/laraveles/subit-archivosApp/public/
Usar el formulario de subida para añadir imágenes
Rutas usadas:
´´´bash
Route::get('/', [UploadController::class, 'index'])->name('upload.index');
Route::get('/create', [UploadController::class, 'create'])->name('upload.create');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
Route::get('image/{id}', [UploadController::class, 'image'])->name('upload.image');
Route::get('show/{file}', [UploadController::class, 'show'])->name('upload.show');
Route::delete('delete/{id}', [UploadController::class, 'destroy'])->name('upload.destroy');
´´´
## Capturas de pantalla de la aplicación

<img src="./caturas/1.png" alt="Imagen">

