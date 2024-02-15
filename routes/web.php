<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobTypeController;
use App\Http\Controllers\OfferController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});

Route::resource('client', ClientController::class);

Route::get('/offer', [OfferController::class, 'index'])->name('offer.index');

Route::get('/client', [ClientController::class, 'index'])->name('client.index');

Route::get('/job', [JobController::class, 'index'])->name('job.index');

Route::get('/jobtype', [JobTypeController::class, 'index'])->name('jobtype.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/clients', function () {
//     return view('clients');
// })->middleware(['auth', 'verified'])->name('clients');

// Route::get('/offer', function () {
//     return view('offer');
// })->middleware(['auth', 'verified'])->name('offer');

// Route::get('/order', function () {
//     return view('order');
// })->middleware(['auth', 'verified'])->name('order');

// Route::get('/users', function () {
//     return view('users');
// })->middleware(['auth', 'verified'])->name('users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
