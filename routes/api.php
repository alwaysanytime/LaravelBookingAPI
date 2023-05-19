<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LinksController;
use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\StyleController;
use App\Http\Controllers\Api\HistoryController;

Route::group([
    // 'middleware' => 'CORS'
], function ($router) {

    //Auth Routes
    Route::get('/email/verification', [AuthController::class, 'sendverification']);

    Route::post('/register', [AuthController::class, 'register'])->name('register.user');
    Route::post('/login', [AuthController::class, 'login'])->name('login.user');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.user');
    Route::get('/follow-count', [AuthController::class, 'followCount'])->name('followCount');
    Route::get('/follow-data', [AuthController::class, 'followData']);

    Route::post('/reset', [AuthController::class, 'reset']);
    Route::post('/forgot', [AuthController::class, 'forgot']);
    Route::post('/verifyuser', [AuthController::class, 'verifyuser']);
    Route::post('/get-verified', [AuthController::class, 'verifyStatus']);
});
