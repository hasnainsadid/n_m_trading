<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\OrganizationController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('dashboard');

    Route::resource('organizations', OrganizationController::class);
    Route::resource('products', ProductController::class);
    Route::resource('purchases', PurchaseController::class);
});



Route::controller(OthersController::class)->group(function () {
    Route::get('/migrate', 'migrate')->name('migration');
    Route::get('/clear', 'clear')->name('clear');
    Route::get('/composer', 'composer')->name('composer');
    Route::get('/iseed', 'iseed')->name('iseed');
});