<?php

use App\Http\Controllers\ProfileController;
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

require __DIR__.'/auth.php';

Route::get('links', [App\Http\Controllers\ShortUserController::class, 'index'])->name('user.links')->middleware('auth');
Route::post('/short', [\App\Http\Controllers\ShortUrlController::class, 'short'])->name('short.url');
Route::get('/{code}', [\App\Http\Controllers\ShortUrlController::class, 'show'])->name('short.show');
Route::delete('/delete/{id}', [\App\Http\Controllers\ShortUrlController::class, 'destroy'])->name('short.delete');
