<?php

use Jch\Inspire\Controllers\InspirationController;
use Illuminate\Support\Facades\Route;

Route::get('inspire', [InspirationController::class,'__invoke']);

