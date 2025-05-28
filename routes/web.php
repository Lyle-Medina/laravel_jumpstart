<?php

use App\Http\Controllers\HelloController;

Route::get('/hello', [HelloController::class, 'greet']);

