<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PayablesController;
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

Route::get('/dashboard', [DashboardController::class, 'show'])              
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/payables', function () {
        return view('payables');
    })->name('payables');

    Route::get('/payables/edit', function () {
        return view('payables-edit');
    })->name('payables-edit');

    Route::get('/payables/view', function () {
        return view('payables-view');
    })->name('payables-view'); 
    
    Route::get('/payables/add', function () {
        return view('payables-add');
    })->name('payables-add');

    Route::get('/tracking', function () {
        return view('tracking');
    })->name('tracking');

    Route::get('/tracking/view', function () {
        return view('tracking-view');
    })->name('tracking-view');

    Route::get('/notifications', function () {
        return view('notifications');
    })->name('notifications');

    Route::get('/folders', function () {
        return view('folders');
    })->name('folders');

    Route::get('/folders/opened', function () {
        return view('folders-opened');
    })->name('folders-opened');

    Route::get('/folders/yearly', function () {
        return view('folders-yearly');
    })->name('folders-yearly');
});   



require __DIR__.'/auth.php';
