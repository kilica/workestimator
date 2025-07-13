<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\WorkEvaluationController;
use App\Http\Controllers\WorkEvaluationTagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/faq-2', [FaqController::class, 'faq2'])->name('faq-2');
Route::get('/faq-h', [FaqController::class, 'faqH'])->name('faq-h');

Route::get('/dashboard', [UserController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::resource('users', UserController::class);

Route::resource('works', WorkController::class);

Route::resource('work-evaluations', WorkEvaluationController::class);
Route::patch('/work-evaluations/{id}/toggle-visibility', [WorkEvaluationController::class, 'toggleVisibility'])
    ->middleware('auth')
    ->name('work-evaluations.toggle-visibility');

Route::middleware(['auth'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::get('work-evaluation-tags', [WorkEvaluationTagController::class, 'index'])->name('work-evaluation-tags.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
