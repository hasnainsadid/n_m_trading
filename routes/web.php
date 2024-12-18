<?php

use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

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
});
