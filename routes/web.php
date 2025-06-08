<?php

use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ItemController;
use App\Http\Controllers\Frontend\KycVerificationController;
use App\Http\Controllers\Frontend\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'verified']], function() {
    /** Dashboard Routes */
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /** Profile Routes */
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('password', [ProfileController::class, 'updatePassword'])->name('password.update');

    /** Kyc Routes */
    Route::get('kyc', [KycVerificationController::class, 'index'])->name('kyc.index')->middleware('kyc');
    Route::post('kyc', [KycVerificationController::class, 'store'])->name('kyc.store')->middleware('kyc');

    /** Author Route Group */
    Route::group(['middleware' => 'is_author'], function() {
        Route::get('items', [ItemController::class, 'index'])->name('items.index');
        // Route::post('/withdraw-info', [ProfileController::class, 'withdrawInfo'])->name('withdraw.info');
        // Route::get('/withdraws', [AuthorWithdrawController::class, 'index'])->name('withdraws.index');
        // Route::get('/withdraws/create', [AuthorWithdrawController::class, 'create'])->name('withdraws.create');
        // Route::post('/withdraws', [AuthorWithdrawController::class, 'store'])->name('withdraws.store');
    });
});

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function() {
    /** Author Route Group */
    Route::group(['middleware' => 'is_author'], function() {
        Route::get('items', [ItemController::class, 'index'])->name('items.index');
        Route::get('items/create', [ItemController::class, 'create'])->name('items.create');
        Route::post('/item-uploads', [ItemController::class, 'itemUploads'])->name('items.uploads');
        Route::delete('/item-destroy/{id}', [ItemController::class, 'itemDestroy'])->name('items.destroy');
        Route::post('/item/store', [ItemController::class, 'storeItem'])->name('items.store');
        Route::get('/item/{id}/edit', [ItemController::class, 'itemEdit'])->name('items.edit');
        Route::put('/item/{id}/update', [ItemController::class, 'itemUpdate'])->name('items.update');
        Route::get('/item/{id}/download', [ItemController::class, 'itemDownload'])->name('items.download');
        Route::get('/item/{id}/changelog', [ItemController::class, 'itemChangeLog'])->name('items.changelog');
        Route::post('/item/{id}/changelog', [ItemController::class, 'storeChangeLog'])->name('items.changelog.store');
        Route::get('/item/{id}/history', [ItemController::class, 'itemHistory'])->name('items.history');
        // Route::post('/item/{id}/changelog', [ItemController::class, 'itemChangeLogSore'])->name('items.changelog.store');
    });
});

require __DIR__.'/auth.php';
