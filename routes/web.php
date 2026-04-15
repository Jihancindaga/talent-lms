<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| TALENT MODULES
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Talent Retention
    Route::get('/talent-retention', function () {
        return view('talent-retention.index');
    })->name('talent.retention');

    Route::get('/talent-retention/risiko', function () {
        return view('talent-retention.risiko');
    })->name('retention.risiko');

});

Route::get('/talent-retention/career', function () {
    return view('talent-retention.career');
})->name('retention.career');


/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


require __DIR__.'/auth.php';