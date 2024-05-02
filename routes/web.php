<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Health\HealthDataController;
//use APP\Http\Controllers\Recipe\RecipeController;
use App\Http\Controllers\Recipe\RecipeController;

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


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('/');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('/health', HealthDataController::class)->middleware(['auth'])->names([
    'index' => 'health.index',
    'create' => 'health.create',
    'store' => 'health.store',
    'show' => 'health.show',
    'edit' => 'health.edit',
    'update' => 'health.update',
    'destroy' => 'health.destroy',
]);

Route::resource('/recipe', RecipeController::class)->middleware(['auth'])->names([
    'index' => 'recipe.index',
    'create' => 'recipe.create',
    'store' => 'recipe.store',
    'show' => 'recipe.show',
    'edit' => 'recipe.edit',
    'update' => 'recipe.update',
    'destroy' => 'recipe.destroy',
]);

require __DIR__.'/auth.php';
