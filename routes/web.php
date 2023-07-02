<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/registro',[ArtistasController::class,'registro'])->name('home.registro');
Route::post('/registro',[ArtistasController::class,'store'])->name('home.store');
Route::get('/Cuentas',[ArtistasController::class,'index'])->name('home.cuentas');
Route::delete('/Cuentas/{id}',[ArtistasController::class,'destroy'])->name('cuentas.destroy');
Route::get('/Cuentas/{cuenta}/edit',[ArtistasController::class, 'edit'])->name('cuentas.edit');
Route::put('Cuentas/{cuenta}',[ArtistasController::class, 'update'])->name('cuentas.update');


//gestionar (eliminar, editar imagenes)
Route::get('/GestionImagenes',[ImagenesController::class, 'GestionarFotos'])->name('Gestion');
Route::get('/Imagenes/edit/{id}',[ImagenesController::class, 'edit'])->name('imagenes.edit');
Route::delete('/Imagenes/destroy/{id}',[ImagenesController::class, 'destroy'])->name('imagenes.destroy');

Route::get('/indexArtista',[ImagenesController::class,'index'])->name('imagenes.index');
Route::post('/indexArtista',[ImagenesController::class,'store'])->name('imagenes.store');

//vistas
Route::get('/login', [HomeController::class, 'index']);
//vistaIndex
Route::get('/', [HomeController::class, 'inicio']);
//Vista Admin banear desbanear
Route::get('/banearDesbanear', [HomeController::class, 'banearDesbanear']);

//publico 
Route::get('/Publico', [HomeController::class, 'publico']);
