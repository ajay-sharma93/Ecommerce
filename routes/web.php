<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminAuthController;
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

require __DIR__ . '/auth.php';


//------------------------------ admin Routes ------------------------------//

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth:admin');

//------------------------------ admin Routes ------------------------------//


//------------------------------for template -------------------------------//

Route::get('/index', [FrontendController::class, 'index']);
Route::get('/detail', [FrontendController::class, 'detail']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/checkout', [FrontendController::class, 'checkout']);
Route::get('/cart', [FrontendController::class, 'cart']);
Route::get('/shop', [FrontendController::class, 'shop']);
//------------------------------for template -------------------------------//
