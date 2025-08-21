<?php

use App\Http\Controllers\Front\ArenaController;
use App\Http\Controllers\Front\ChallengeController;
use App\Http\Controllers\Front\SkillController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('skills')
    ->group(function() {
        Route::get('/', [SkillController::class, 'skills'])->name('skills');
        Route::get('/{slug}', [SkillController::class, 'getSkillQuestions'])->name('skills.single');
    });

Route::prefix('challenges')
    ->group(function() {
        Route::get('/', [SkillController::class, 'skills'])->name('challenge');
        Route::get('/{slug}', [ChallengeController::class, 'getSingleChallenge'])->name('challaenge.single');
    });

Route::get('/arena', [ArenaController::class, 'index'])->name('arena');

require __DIR__.'/auth.php';
