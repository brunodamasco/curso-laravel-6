<?php

use App\Http\Controllers\Admin\TesteController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', 'ProductController');

/*
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');
Route::post('products', 'ProductController@store')->name('products.store');
*/

Route::get('/teste', [TesteController::class, 'teste']);

Route::get('/', function () {
    return view('welcome');
});


// Redirecionando uma rota

Route::redirect('/redirect', '/redirect2');

Route::get('redirect1', function () {
    return redirect('/redirect2');
});

Route::get('redirect2', function () {
    return 'Redirect2';
});

Route::get('/redirect3/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";
});
