<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FileController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'web', 'admin_access'])
    ->prefix('admin')
    ->group(function() {
        Route::get('', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

        // Route::prefix('roles')->group(function() {
        //     Route::get('/', 'Admin\RoleController@index')->name('admin.roles.index');

        // });

        Route::prefix('files')->group(function() {
            Route::get('/', [FileController::class, 'index'])->name('admin.files.index');
            Route::get('/create', [FileController::class, 'create'])->name('admin.files.create');
        });
    });
