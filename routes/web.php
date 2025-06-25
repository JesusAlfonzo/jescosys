<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PresentacioneController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas para admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'role:admin']); 

Route::get('/modulos', function(){
    return view('modulos.modulos');
})->middleware(['auth', 'role:admin'])->name('modulos');

// Route::get('/Productos/presentacion', function(){
//     return view('Productos.presentacion');
// })->middleware(['auth', 'role:admin'])->name('presentacion');

Route::resource('presentaciones', PresentacioneController::class)->middleware(['auth', 'role:admin']);

// Route::get('/Productos/marca', function(){
//     return view('Productos.marca');
// })->middleware(['auth', 'role:admin'])->name('marca');

Route::resource('marcas', MarcaController::class)->middleware(['auth', 'role:admin']);

// Route::get('/Productos/categoria', function(){
//     return view('Productos.categoria');
// })->middleware(['auth', 'role:admin'])->name('categoria');

Route::resource('categorias', CategoriaController::class)->middleware(['auth', 'role:admin']);

// Route::get('/Productos/producto', function(){
//     return view('Productos.producto');
// })->middleware(['auth', 'role:admin'])->name('producto');

Route::resource('productos', ProductoController::class)->middleware(['auth', 'role:admin']);

//rutas para editor

// Route::resource('editor/dashboard',AdminController::class)
//     ->middleware(['auth','role:editor']); // CRUD