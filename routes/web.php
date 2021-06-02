<?php

use Illuminate\Support\Facades\Route;


    Route::get('/reporting', [
        App\Http\Controllers\ReportingController::class,
        'index'
        ]);