<?php

use Controllers\AnimalController;
use Facades\Route;

Route::get('/animals', [AnimalController::class, 'index']);
// Route::get('/users', [UserController::class, 'index']);
