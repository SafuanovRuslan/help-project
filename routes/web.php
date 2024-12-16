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
})->name('/');

Route::get('/methodical', function () {
    return view('metodical');
})->name('methodical');

Route::get('/obr', function () {
    return view('obr');
})->name('obr');

Route::get('/edu', function () {
    return view('edu');
})->name('edu');

Route::get('/specialists', function () {
    return view('specialists');
})->name('specialists');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::post('/forum', [\App\Http\Controllers\ForumController::class, 'createSubject']);

Route::get('/forum/{id}', [\App\Http\Controllers\ForumController::class, 'comments']);

Route::post('/comment', [\App\Http\Controllers\ForumController::class, 'createComment']);

Route::get('/docs', function () {
    return view('docs');
})->name('docs');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/info', function () {
    return view('info');
})->name('info');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
