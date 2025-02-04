<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CMS\ActivityController;
use App\Http\Controllers\CMS\CompanyProfileController;
use App\Http\Controllers\CMS\GapController;
use App\Http\Controllers\CMS\MatrixController;
use App\Http\Controllers\CMS\SmartController;
use App\Http\Controllers\CMS\SwotController;
use Illuminate\Support\Facades\Route;



Route::post('v1/login', [UserController::class, 'login']);
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');
Route::middleware(['auth', 'web'])->group(function () {
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
    Route::get('/user-setting', function () {
        return view('pages.userSettings');
    });

    Route::prefix('v1')->group(function () {
        // Routes company-profile
        Route::prefix('company-profile')->controller(CompanyProfileController::class)->group(function () {
            Route::get('/{category}', 'getAllData');
            Route::post('/create', 'createData');
            Route::get('/get/{id}', 'getDataById');
            Route::post('/update/{id}', 'updateData');
            Route::delete('/delete/{id}', 'deleteData');

            Route::post('/result', 'createResult');
            Route::get('/result/{category}', 'getAllResult');
            Route::delete('/delete/result/{id}', 'deleteResult');
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
            Route::delete('/delete/{id}', 'deleteData');
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
        Route::prefix('users')->controller(UserController::class)->group(function () {
            Route::get('/', 'getUser');
            Route::post('/update/{id}', 'updateUser');
        });
    });
    Route::post('v1/logout', [UserController::class, 'logout']);
});
