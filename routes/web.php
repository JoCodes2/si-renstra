<?php

use App\Http\Controllers\CMS\ActivityController;
use App\Http\Controllers\CMS\CompanyProfileController;
use App\Http\Controllers\CMS\GapController;
use App\Http\Controllers\CMS\MatrixController;
use App\Http\Controllers\CMS\SmartController;
use App\Http\Controllers\CMS\SwotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/swot', function () {
    return view('admin.swot');
});

Route::get('/gap', function () {
    return view('pages.gap');
});

Route::get('/introduction', function () {
    return view('admin.introduction');
});

Route::get('/activity', function () {
    return view('pages.activity');
});
Route::get('/smart', function () {
    return view('admin.smart');
});

Route::get('/matrix', function () {
    return view('admin.matrix');
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

    // Routes gap
    Route::prefix('gap')->controller(GapController::class)->group(function () {
        Route::get('/', 'getAllData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateData');
        Route::post('/create', 'createData');
        Route::delete('/delete/{id}', 'deleteData');
    });

    // route activity
    Route::prefix('activity')->controller(ActivityController::class)->group(function () {
        Route::get('/{category_activity}', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateData');
        Route::post('/change-status/{id}', 'changeStatus');
    });
    // Routes swot
    Route::prefix('smart')->controller(SmartController::class)->group(function () {
        Route::get('/{category}', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateData');
        Route::delete('/delete/{id}', 'deleteData');
    });

    // Routes smart
    Route::prefix('matrix')->controller(MatrixController::class)->group(function () {
        Route::get('/{category}', 'getAllData');
        Route::post('/create', 'createData');
        Route::get('/get/{id}', 'getDataById');
        Route::post('/update/{id}', 'updateData');
        Route::delete('/delete/{id}', 'deleteData');
    });
});
