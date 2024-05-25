<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    $parcel = Admin::all();
    $parcelUser = null;
    return view('dashboard', compact('parcel', 'parcelUser'));
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/add', [AdminController::class, 'create']);
Route::post('/add', [AdminController::class, 'store']);
Route::get("/edit/{id}", [AdminController::class, 'edit']);
Route::get("/add/{id}", [AdminController::class, 'update']);

Route::post('/search', [Controller::class, 'search']);

require __DIR__ . '/auth.php';
