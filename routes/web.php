<?php

use App\Http\Controllers\CMS\CompanyProfileController;
use App\Http\Controllers\CMS\SwotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/swot', function () {
    return view('pages.swot');
});

Route::prefix('v1')->group(function () {
    // Routes company-profile
    Route::prefix('company-profile')->controller(CompanyProfileController::class)->group(function () {
        Route::get('/{category}', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateData');
        Route::delete('/delete/{id}', 'deleteData');
    });

    // Routes swot
    Route::prefix('swot')->controller(SwotController::class)->group(function () {
        Route::get('/{category}', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateData');
        Route::delete('/delete/{id}', 'deleteData');
    });
});
