<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
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
})->name('home');

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

    Route::prefix('skills')->group(function () {
        Route::get('/', [SkillController::class, 'edit'])->name('skills.edit');
        Route::post('/update/{skill}', [SkillController::class, 'update'])->name('skills.update');
    });

    Route::prefix('testimonials')->group(function () {
        Route::get('/', [TestimonialController::class, 'add'])->name('testimonials.add');
        Route::post('/submit', [TestimonialController::class, 'submit'])->name('testimonials.submit');
        Route::match(['get', 'post'], '/edit/{testimonial}', [TestimonialController::class, 'edit'])->name('testimonials.edit');
        Route::get('/delete/{testimonial}', [TestimonialController::class, 'delete'])->name('testimonials.delete');
    });

    Route::prefix('portfolio')->group(function () {
        Route::get('/', [PortfolioController::class, 'add'])->name('portfolio.add');
        Route::prefix('tags')->group(function () {
            Route::post('/submit', [PortfolioController::class, 'tagSubmit'])->name('portfolio.tag.submit');
            Route::get('/delete/{tag}', [PortfolioController::class, 'tagDelete'])->name('portfolio.tag.delete');
        });
        Route::post('/submit', [PortfolioController::class, 'submit'])->name('portfolio.submit');
        Route::get('/delete/{portfolio}', [PortfolioController::class, 'delete'])->name('portfolio.delete');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/update/{profile}', [ProfileController::class, 'update'])->name('profile.update');
    });
    Route::prefix('blog')->group(function () {
        Route::get('/', [BlogController::class, 'add'])->name('blog.add');
        Route::post('/submit', [BlogController::class, 'submit'])->name('blog.submit');
        Route::match(['get', 'post'], '/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::get('/delete/{blog}', [BlogController::class, 'delete'])->name('blog.delete');
    });
});
// });
