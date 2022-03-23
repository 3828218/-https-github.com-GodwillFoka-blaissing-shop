<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
require __DIR__.'/auth.php';
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

        Route::group(['prefix'=>'/cathegorie'], function(){
            Route::post('/', 'App\Http\Controllers\Admin\CathegorieController@store');
            Route::get('/create', 'App\Http\Controllers\Admin\CathegorieController@create');
            Route::get('/{id}/edit', 'App\Http\Controllers\Admin\CathegorieController@edit');
            Route::patch('/{id}', 'App\Http\Controllers\Admin\CathegorieController@update');
            Route::delete('/{id}', 'App\Http\Controllers\Admin\CathegorieController@destroy');
            Route::get('/{id}', 'App\Http\Controllers\Admin\CathegorieController@show');
            Route::get('/', 'App\Http\Controllers\Admin\CathegorieController@index');
        });
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

// Route::resource('admin/cathegorie', 'App\Http\Controllers\Admin\CathegorieController');
// Route::resource('admin/produit', 'App\Http\Controllers\Admin\ProduitController');

