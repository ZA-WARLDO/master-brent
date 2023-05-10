<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/events', [App\Http\Controllers\EventsController::class, 'index'])->name('events');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/appointment', [App\Http\Controllers\AppointmentController::class, 'index'])->name('appointment');
Route::get('/setting', [App\Http\Controllers\SettingController::class, 'index'])->name('setting');
Route::get('/services/{user_type?}',[App\Http\Controllers\ServicesController::class, 'index'])->name('services.index');
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
Route::get('/editprofile', [App\Http\Controllers\PortfolioController::class, 'index'])->name('editprofile');

//store, edit and delete
Route::post('/appointment/add',[App\Http\Controllers\AppointmentController::class, 'store'])->name('appointment.add');
Route::delete('/appointment/delete/{appointment}', [App\Http\Controllers\AppointmentController::class, 'destroy'])->name('appointment.delete');
Route::get('/appointment/edit/{id}', [App\Http\Controllers\AppointmentController::class, 'edit'])->name('appointment.edit');
Route::post('/appointment/update/{id}', [App\Http\Controllers\AppointmentController::class, 'update'])->name('appointment.update');
Route::post('/profile/update/{id}', [App\Http\Controllers\Profile::class, 'update'])->name('profile.update');


Route::middleware(['auth'])->group(function () {
    // Protected routes 
    Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
});
