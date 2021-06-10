<?php

use Controllers\SocksController;
use Facades\Route;

Route::get('/user/socks', [SocksController::class, 'index']);
Route::get('/user/socks/{id}', [SocksController::class, 'show']);
//Route::get('/user/ties', [TiesController::class, 'index']);
//Route::get('/user/ties/{id}', [TiesController::class, 'show']);
//Route::post('/animals/create', [AnimalController::class, 'create']);
// hello
// ca marche
