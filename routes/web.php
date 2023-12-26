<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RazdelController;
use App\Http\Controllers\GalleryRazdelController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ClientShopController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [GalleryRazdelcontroller::class, 'osnova1']);
Route::get('/svyaz', [RegistrationController::class, 'index']);
Route::get('/createslide', [GalleryRazdelcontroller::class, 'formcr']);
Route::post('/slider', [PostController::class, 'Submit']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/gallery', [AdminController::class, 'index2']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/tablica', [DeleteController::class, 'table']);
Route::get('/slider', [PostController::class, 'slider']);
Route::get('/tablica/{update}', [EditController::class, 'edit']);
Route::delete('/tablica/{delete}', [DeleteController::class, 'delete']);
Route::post('/edit/{edit}', [EditController::class, 'edit']);
Route::post('edit', [EditController::class, 'update']);

Route::post('/video', [VideoController::class, 'insert'])->name('video');
Route::get('video', [VideoController::class, 'qwe']);
Route::get('allimage', [GalleryController::class, 'index']);
Route::post('allimage', [GalleryController::class, 'upload']);
Route::post('createrazdel', [RazdelController::class, 'create']);
Route::get('createrazdel', [RazdelController::class, 'create1']);
Route::get('/galleryedit', [RazdelController::class, 'table']);
Route::delete('/galleryedit/{delete}', [RazdelController::class, 'delete']);
Route::post('/redrazdel/{edit}', [RazdelController::class, 'edit']);
Route::post('/redrazdel', [RazdelController::class, 'update']);
Route::post('/galleryedit/{update}', [RazdelController::class, 'update1']);
Route::delete('/redrazdel/{delete}', [RazdelController::class, 'delete1']);
Route::post('createslide', [GalleryRazdelController::class, 'sova']);
Route::get('/allimage', [GalleryRazdelcontroller::class, 'poezd']);
Route::delete('/allimage/{delete}', [GalleryRazdelcontroller::class, 'srem']);
Route::post('/svyaz', [RegistrationController::class, 'input']);
Route::get('/reg', [RegistrationController::class, 'table']);
Route::get('/hueta', [RegistrationController::class, 'index2']);
Route::delete('/reg/{delete}', [RegistrationController::class, 'delete']);
Route::get('autocomplete', [RegistrationController::class, 'autocomplete'])->name('autocomplete');
Route::get('/search', [RegistrationController::class, 'search']);
Route::post('/client/{update}', [RegUserController::class, 'index']);
Route::delete('/client/{delete}', [DeleteController::class, 'delete']);
Route::post('/client', [RegUserController::class, 'register']);
Route::get('/shop', [AdminController::class, 'index3']);
Route::get('/obzorshop', [AdminController::class, 'view']);
Route::get('/redshop', [ShopController::class, 'show']);


Route::get('/createshop/{id?}', [ShopController::class, 'index']);
Route::post('/createshop/save', [ShopController::class, 'create']);
Route::post('/createshop/edit', [ShopController::class, 'update']);
Route::delete('/createshop/{delete}', [ShopController::class, 'delete']);


Route::get('/discount/{id?}', [DiscountController::class, 'index']);
Route::post('/discount/save', [DiscountController::class, 'update']);
Route::post('/discount/edit', [DiscountController::class, 'update']);



Route::get('/catalog',[ClientShopController::class,'index']);



require __DIR__ . '/auth.php';
