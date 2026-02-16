<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'oi';
});

Route::get('/show', [MainController::class, 'showPage']);
