<?php

use App\Http\Controllers\CMS\CompanyProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
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
});
