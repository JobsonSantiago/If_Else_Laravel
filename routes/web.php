<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/fornecedores', 'FornecedorController@index')->name('site.fornecedor');



Route::prefix('/app')->group(function(){
    Route::get('/fornecedores', function(){return 'FornecedorController@index';})->name('app.fornecedores');
});

Route::fallback(function(){
    echo 'A rota acessada não existe. <a h"'.route('site.index').'">clique aqui</a> para ir para página inicial';
});