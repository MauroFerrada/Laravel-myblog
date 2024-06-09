<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Post;

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

Route::controller(CategoryController::class)->group(function(){
    Route::get('category/','getIndex')->name('category.index');
    Route::get('category/show/{id}', 'getShow')->name('category.show');
    Route::get('category/create', 'getCreate')->name('category.create');
    Route::get('category/edit/{id}',  'getEdit')->name('category.edit');   
});

route::get("prueba",function(){
    /*Crear post
    $post = new post;

    $post->title = "Titulo de prueba 1";
    $post->poster = "poster de prueba 1";
    $post->content = "contenido de prueba 1";

    $post->save();

    return $post;*/

    /*$post = post::find(1);*/
});
require __DIR__.'/auth.php';
