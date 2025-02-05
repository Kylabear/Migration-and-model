<?php

use App\Http\Controllers\GreetController;

Route::get('/greet/{name}', [GreetController::class, 'greet']);


use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

