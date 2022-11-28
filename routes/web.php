<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/imoveis', [PropertyController::class, 'index']);
Route::get('/imoveis/novo', [PropertyController::class, 'create']);
Route::post('/imoveis/cadastrar', [PropertyController::class, 'store']);
