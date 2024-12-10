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

Route::get('/dashboard', function () {
    return redirect('/');
});

Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('/');

Route::get('/methodical', function () {
    return view('metodical');
})->middleware(['auth', 'verified'])->name('methodical');

Route::get('/obr', function () {
    return view('obr');
})->middleware(['auth', 'verified'])->name('obr');

Route::get('/edu', function () {
    return view('edu');
})->middleware(['auth', 'verified'])->name('edu');

Route::get('/specialists', function () {
    return view('specialists');
})->middleware(['auth', 'verified'])->name('specialists');

Route::get('/forum', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('forum');

Route::get('/docs', function () {
    return view('docs');
})->middleware(['auth', 'verified'])->name('docs');

Route::get('/news', function () {
    return view('news');
})->middleware(['auth', 'verified'])->name('news');

Route::get('/info', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('info');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
