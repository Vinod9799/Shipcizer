<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Admin\{DashboardComponents,UserComponents,RolePermissionComponents};

Route::view('/', 'welcome');

Route::view('admin-dashboard', 'admin-dashboard')
    ->middleware(['auth'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



Route::group(['prefix' => 'RkVkcizer', 'as' => 'admin.'], function () {
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', DashboardComponents::class)
            ->name('dashboard');
        Route::get('users', UserComponents::class)
            ->name('user');
        Route::get('role-permission', RolePermissionComponents::class)
            ->name('role-permission');
    });
});
Route::group(['prefix' => 'seller'], function () {
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', DashboardComponents::class)
            ->name('dashboard');
        Route::get('users', UserComponents::class)
            ->name('user');
        Route::get('role-permission', RolePermissionComponents::class)
            ->name('role-permission');
    });
});

require __DIR__.'/auth.php';
