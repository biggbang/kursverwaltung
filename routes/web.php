<?php

use App\Http\Controllers\ProfileController;
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
Route::resource('courses','App\Http\Controllers\CourseController');

Route::resource('customers','App\Http\Controllers\CustomerController');

Route::resource('extras','App\Http\Controllers\ExtraController');

Route::resource('instructors','App\Http\Controllers\InstructorController');

Route::resource('participations','App\Http\Controllers\ParticipationController');

Route::resource('people','App\Http\Controllers\PersonController');

Route::resource('presentations','App\Http\Controllers\PresentationController');

Route::resource('suppliers','App\Http\Controllers\SupplierController');

