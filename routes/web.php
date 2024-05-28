<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Models\Admin;
use App\Models\ParcelDetails;
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
    $parcel = null;
    $pid = null;
    return view('welcome', compact('parcel', 'pid'));
});


Route::get('/dashboard', function () {

    $pid = null;
    $parcel = null;
    return view('dashboard', compact('parcel', 'pid'));
})->name('dashboard');

Route::post('/dashboard', function (Request $request) {
    $parcel = ParcelDetails::where('parcel_id', $request->parcel_id)->get();

    $pid = null;
    foreach ($parcel as $p) {
        $pid = $p->parcel_id;
    }

    return view('dashboard', compact('parcel', 'pid'));
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/add', [AdminController::class, 'create']);
Route::post('/add', [AdminController::class, 'store']);
Route::get("/edit/{id}", [AdminController::class, 'edit']);
Route::get("/add/{id}", [AdminController::class, 'update']);
Route::get("/update/{id}", [AdminController::class, 'update1']);
Route::post("/update/{id}", [AdminController::class, 'update2']);
Route::get("/edit-conditions/{id}", [AdminController::class, 'editCondition']);
Route::post("/edit-conditions/{id}", [AdminController::class, 'storeEditedCondition']);
Route::get('/delete-conditions/{id}',[AdminController::class,'destroy']);

Route::post('/search', [Controller::class, 'search']);

require __DIR__ . '/auth.php';
