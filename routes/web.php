<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserAuthController;
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
    return view('index');
});

// Route::view('/login', 'login');
Route::match(['GET', 'POST'], 'admin/login', [UserAuthController::class, 'login'])->name('login');

// Route::middleware(['auth'])->group(function () {
Route::prefix('admin')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout', [UserAuthController::class, 'logout'])->name('logout');

    Route::prefix('teams')->group(function () {
        Route::get('/', [TeamController::class, 'add'])->name('team.add');
        Route::post('/submit', [TeamController::class, 'submit'])->name('team.submit');
        Route::match(['get', 'post'], '/edit/{team}', [TeamController::class, 'edit'])->name('team.edit');
        Route::get('/delete/{team}', [TeamController::class, 'delete'])->name('team.delete');
    });

    Route::prefix('counter')->group(function () {
        Route::get('/', [CounterController::class, 'edit'])->name('counter.edit');
        Route::post('/update/{counter}', [CounterController::class, 'update'])->name('counter.update');
    });

    Route::prefix('about')->group(function () {
        Route::get('/', [AboutController::class, 'edit'])->name('about.edit');
        Route::post('/update/{about}', [AboutController::class, 'update'])->name('about.update');
    });
});
// });
