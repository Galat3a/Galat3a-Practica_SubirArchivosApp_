<?php

// import de jave

use App\Http\Controllers\SubirControlados;
use Illuminate\Support\Facades\Route;

Route::get('/', [SubirControlador::clase, 'index'])->name('subir.index');
Route::post('subir', [SubirControlador::clase, 'subir'])->name('subir.subir');
Route::get('view', [SubirControlador::clase, 'view'])->name('subir.view');//ruta/ metodo / y nombre de la ruta para usarlo en la programacion del controller...etc
Route::get('img{file}', [SubirControlador::clase, 'img'])->name('subir.img');