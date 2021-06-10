<?php

use Controllers\{HomeController, SocksController};
use Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/socks', [SocksController::class, 'index']);
Route::get('/socks/{id}', [SocksController::class, 'show']);
//Route::get('/user/ties', [TiesController::class, 'index']);
//Route::get('/user/ties/{id}', [TiesController::class, 'show']);
//Route::post('/socks/create', [AnimalController::class, 'create']);
