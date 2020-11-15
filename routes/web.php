<?php

use App\Http\Controllers\Admin\TesteController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', 'ProductController');


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
