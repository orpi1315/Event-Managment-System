<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('/', [AdminController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/logout', [AdminController::class, 'logout'])->name('user.logout');
Route::get('/Event-Form', [EventController::class, 'index'])->name('event.form');
Route::get('/Event-Table', [EventController::class, 'indexshow'])->name('event.table');

// Insert
Route::post('/Event-Form-Submit', [EventController::class, 'submit'])->name('post.form');
Route::post('/Event-Reservation-Submit', [EventController::class, 'reservation'])->name('reserve.form');

Route::get('event-edit/{id}',[EventController::class,'editevent'])->name('event.edit');
Route::get('event-del/{id}',[EventController::class,'delevent'])->name('event.del');
Route::post('event-update',[EventController::class,'update'])->name('edit.form');

Route::get('/Category-Form', [EventController::class, 'cat_index'])->name('category.form');
Route::post('/Category-Form-Submit', [EventController::class, 'save'])->name('category.save');
Route::get('/Category-Table', [EventController::class, 'table'])->name('category.table');
Route::get('Category-edit/{id}',[EventController::class,'edit'])->name('category.edit');
Route::post('/Category-Form-Update', [EventController::class, 'updatecat'])->name('category.update');
Route::get('Category-del/{id}',[EventController::class,'del'])->name('category.del');


Route::post('Contract-Us',[EventController::class,'contract'])->name('contract.us');
Route::get('Contract-table',[EventController::class,'contract_table'])->name('contract.table');