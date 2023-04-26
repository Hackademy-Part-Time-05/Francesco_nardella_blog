<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->prefix('account')->group(function() {  //(ACCOUNT PER TUTTE LE ROUTE )   //(MIDDLEWARE PER TUTTE LE ROUTE)  //=>('GRAZIE ALLA FUNCTION')

    // Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index')->middleware('auth');
    // Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');   //1-METODO
    // Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    // Route::get('/articles/{article}/show', [ArticleController::class, 'show'])->name('articles.show');


    // Route::resource('articles', \App\Http\Controllers\ArticleController::class);
    // Route::resource('categories', \App\Http\Controllers\CategoryController::class);                                      //2-METODO


    Route::resources([
        'articles' => \App\Http\Controllers\ArticleController::class,
        'categories' => \App\Http\Controllers\CategoryController::class                                                     //3-METODO
    ]);

});




