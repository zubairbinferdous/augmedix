<?php

use App\Http\Controllers\HomeController;
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

// home page 
Route::get('/', [HomeController::class, 'home'])->name('homePage');
//WatchList 
Route::get('/watch-list', [HomeController::class, 'watch'])->name('watch');
//portfolio 
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
//Discover 
Route::get('/discover', [HomeController::class, 'discover'])->name('discover');


// add tread 
Route::get('/add-Tread', [HomeController::class, 'addTread'])->name('addTread');
Route::post('/addData/store', [HomeController::class, 'addTreadDataStore'])->name('add.tread.store');





// Auth install 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
