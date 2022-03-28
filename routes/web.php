<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
login: engouepouakorichardjany@gmail.com
password: engouepouakorichardjany@gmail.com1
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dashboard', 'App\Http\Controllers\Admin\ProduitController@index')->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';


Route::get('/', 'App\Http\Controllers\Admin\ProduitController@listing');


Route::group(['middleware' => ['auth']] ,function(){
    Route::group(['prefix'=>'/admin'], function(){
        Route::group(['prefix'=>'/produit'], function(){
            Route::post('/', 'App\Http\Controllers\Admin\ProduitController@store');
            Route::get('/create', 'App\Http\Controllers\Admin\ProduitController@create');
            Route::get('/{id}/edit', 'App\Http\Controllers\Admin\ProduitController@edit');
            Route::patch('/{id}', 'App\Http\Controllers\Admin\ProduitController@update');
            Route::delete('/{id}', 'App\Http\Controllers\Admin\ProduitController@destroy');
            Route::get('/{id}', 'App\Http\Controllers\Admin\ProduitController@show');
            Route::get('/', 'App\Http\Controllers\Admin\ProduitController@index');
        });

        Route::group(['prefix'=>'/user'], function(){
            Route::post('/', 'App\Http\Controllers\Admin\UserController@store');
            Route::get('/create', 'App\Http\Controllers\Admin\UserController@create');
            Route::get('/{id}/edit', 'App\Http\Controllers\Admin\UserController@edit');
            Route::patch('/{id}', 'App\Http\Controllers\Admin\UserController@update');
            Route::delete('/{id}', 'App\Http\Controllers\Admin\UserController@destroy');
            Route::get('/', 'App\Http\Controllers\Admin\UserController@index');
        });
    });
});

Route::resource('admin/user', 'App\Http\Controllers\Admin\UserController');
