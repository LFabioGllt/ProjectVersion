<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Creacion de rutas para el foro
//ruta para llamar la funcion de index y mostrar publicaciones
Route::get('/post',[App\Http\Controllers\PostController::class,'index'])->name('posts.index');
//Ruta para crear el registro en BD de pots
Route::post('/post',[App\Http\Controllers\PostController::class,'store'])->name('posts.store');
// ruta para el formulario de edicio n  al post
Route::get('/post/(post)/edit',[App\Http\Controllers\PostController::class,'edit'])->name('posts.edit');
//ruta para actualizar los post en la base de datos
Route::patch('/post/{post}',[App\Http\Controllers\PostController::class,'update'])->name('posts.update');
//ruta para eliminar lso posts a publicaciones
Route::delete('/post/{post}',[App\Http\Controllers\PostController::class,'destroy'])->name('posts.destroy');

require __DIR__.'/auth.php';
