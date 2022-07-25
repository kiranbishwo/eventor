<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\LoginController;

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
// Login
// Route::get('/login',[LoginController::class, 'login']);
Route::post('/loginadmin',[LoginController::class, 'postLogin'])->name('login');
Route::get('/dashboard',[LoginController::class, 'dashboard']);
Route::get('/logout',[LoginController::class, 'logout']);

Route::get('/',[LoginController::class, 'dashboard']);
Route::get('index',[LoginController::class, 'dashboard']);

// Route::get('/',[HomeController::class, 'index']);
// Route::get('index',[HomeController::class, 'index']);

// login end
// category
Route::get('/category',[CategoryController::class, 'index']);
Route::post('/category/add',[CategoryController::class, 'store']);
Route::post('/category/loadtable',[CategoryController::class, 'loadtable']);
Route::get('/category/edit/{id}',[CategoryController::class, 'edit']);
Route::post('/category/update',[CategoryController::class, 'update']);
Route::get('/category/delete/{id}',[CategoryController::class, 'delete']);
Route::post('/category/destroy',[CategoryController::class, 'destroy']);
// Category End

// Route::get('/gallery',[GalleryController::class, 'index']);
Route::post('/gallery/add',[GalleryController::class, 'store']);
// Route::post('/gallery/loadtable',[GalleryController::class, 'loadtable']);

Route::prefix('gallery')->group(function () {
    Route::controller(GalleryController::class)->group(function () {
        Route::name('gallery.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/loadtable', 'loadtable')->name('loadtable');
            Route::get('/delete/{id}', 'delete')->name('delete');
            Route::post('/destroy', 'destroy')->name('destroy');
            // Route::post('/add', 'add')->name('store');
        });
    });
});

Route::get('/booking',[BookingController::class, 'index']);
Route::get('/bookingDetails',[BookingController::class, 'bookingDetails']);
Route::get('/editBooking',[BookingController::class, 'editBooking']);

// setting route start
Route::get('/setting',[SettingController::class, 'index']);
Route::get('/editSetting/{id}',[SettingController::class, 'editSetting']);
Route::post('/editSetting/update',[SettingController::class, 'updatestore']);
// setting route end

// package start
Route::get('/addNewPackage',[PackageController::class, 'addNewPackage']);
Route::post('/addNewPackage/add',[PackageController::class, 'store']);

Route::prefix('package')->group(function () {
    Route::controller(PackageController::class)->group(function () {
        Route::name('package.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/loadtable', 'loadtable')->name('loadtable');
            Route::get('/delete/{id}', 'delete')->name('delete');
            Route::post('/destroy', 'destroy')->name('destroy');
            Route::post('/update', 'update')->name('update');
            Route::get('/edit/{id}', 'edit')->name('edit');
        });
    });
});
// package end

// team route start
Route::get('/addnewteam',[TeamController::class, 'addnewteam']);
Route::post('/addnewteam/add',[TeamController::class, 'store']);
Route::prefix('team')->group(function () {
    Route::controller(TeamController::class)->group(function () {
        Route::name('team.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/loadtable', 'loadtable')->name('loadtable');
            Route::get('/delete/{id}', 'delete')->name('delete');
            Route::post('/destroy', 'destroy')->name('destroy');
            Route::post('/update', 'update')->name('update');
            Route::get('/edit/{id}', 'edit')->name('edit');
        });
    });
});
// team route end

// profile start
Route::get('/profile/{id}',[ProfileController::class, 'index']);
Route::get('/updateProfile/{id}',[ProfileController::class, 'updateProfile']);
Route::post('/updateProfile/update',[ProfileController::class, 'update']);
// profile end

// Blog routes
Route::get('/addnewblog',[BlogController::class, 'addnewblog']);
Route::post('/addnewblog/add',[BlogController::class, 'store']);
Route::prefix('blog')->group(function () {
    Route::controller(BlogController::class)->group(function () {
        Route::name('blog.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/loadtable', 'loadtable')->name('loadtable');
            Route::get('/delete/{id}', 'delete')->name('delete');
            Route::post('/destroy', 'destroy')->name('destroy');
            Route::post('/update', 'update')->name('update');
            Route::get('/edit/{id}', 'edit')->name('edit');
        });
    });
});
// blog route end

// vendor route
Route::prefix('vendor')->group(function () {
    Route::controller(VendorController::class)->group(function () {
        Route::name('vendor.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/loadtable', 'loadtable')->name('loadtable');
            Route::get('/delete/{id}', 'delete')->name('delete');
            Route::post('/destroy', 'destroy')->name('destroy');
            Route::post('/update', 'update')->name('update');
            Route::get('/edit/{id}', 'edit')->name('edit');
        });
    });
});
Route::get('/addnewvendor',[VendorController::class, 'addnewvendor']);
Route::post('/addnewvendor/add',[VendorController::class, 'store']);
// vendor route end

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
