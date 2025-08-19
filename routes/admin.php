<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'web', 'admin_access'])
    ->prefix('admin')
    ->group(function() {
        Route::get('', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

        // Route::prefix('roles')->group(function() {
        //     Route::get('/', 'Admin\RoleController@index')->name('admin.roles.index');

        // });
    });
