<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/user', [SiteController::class, 'Bonjour']);
