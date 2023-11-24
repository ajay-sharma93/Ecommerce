<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProfileController;
use App\Models\ContactUs;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
})->middleware('guest:admin');

Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login')->middleware('guest:admin');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth:admin');

Route::get('/admin/Addnewproduct', function () {
    return view('/admin.Addnewproduct');
});

Route::post('/admin/save-detail', function (Request $request) {
    $image1 = Storage::disk('local')->put('public/services', $request->image1);
    $image1Location = Storage::url($image1);
    $image2 = Storage::disk('local')->put('public/services', $request->image2);
    $image2Location = Storage::url($image2);
    $image3 = Storage::disk('local')->put('public/services', $request->image3);
    $image3Location = Storage::url($image3);
    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'ShortDes' => $request->ShortDes,
        'sizes' => $request->sizes,
        'colors' => $request->colors,
        'image1' => 'http://localhost:8000/' . $image1Location,
        'image2' => 'http://localhost:8000/' . $image2Location,
        'image3' => 'http://localhost:8000/' . $image3Location,
    ]);
});



//------------------------------ admin Routes ------------------------------//


//------------------------------for template -------------------------------//

Route::get('/index', [FrontendController::class, 'index']);
Route::get('/detail', [FrontendController::class, 'detail']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/checkout', [FrontendController::class, 'checkout']);
Route::get('/cart', [FrontendController::class, 'cart']);
Route::get('/shop', [FrontendController::class, 'shop']);
//------------------------------for template -------------------------------//

//-------------------to save the contact info-------------------------------//

Route::post('/save-contact', function (Request $request) {
    ContactUs::create($request->all());
    return redirect()->back()->with('success', 'You have Successfully Registred');
});
//-------------------to save the contact info--------------------------------//

//-------------------for Admin/dashboard------------------------------------//

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth:admin');
