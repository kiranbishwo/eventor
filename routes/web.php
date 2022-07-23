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
Route::get('/',[HomeController::class, 'index']);
Route::get('index',[HomeController::class, 'index']);

// category
Route::get('/category',[CategoryController::class, 'index']);
Route::post('/category/add',[CategoryController::class, 'store']);
Route::post('/category/loadtable',[CategoryController::class, 'loadtable']);
Route::get('/category/edit/{id}',[CategoryController::class, 'edit']);
Route::post('/category/update',[CategoryController::class, 'update']);
Route::get('/category/delete/{id}',[CategoryController::class, 'delete']);
Route::post('/category/destroy',[CategoryController::class, 'destroy']);
// Category End

Route::get('/gallery',[GalleryController::class, 'index']);

Route::get('/booking',[BookingController::class, 'index']);
Route::get('/bookingDetails',[BookingController::class, 'bookingDetails']);
Route::get('/editBooking',[BookingController::class, 'editBooking']);

// setting route start
Route::get('/setting',[SettingController::class, 'index']);
Route::get('/editSetting/{id}',[SettingController::class, 'editSetting']);
Route::post('/editSetting/update',[SettingController::class, 'updatestore']);
// setting route end

Route::get('/package',[PackageController::class, 'index']);
Route::get('/addNewPackage',[PackageController::class, 'addNewPackage']);

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

Route::get('/profile',[ProfileController::class, 'index']);
Route::get('/updateProfile',[ProfileController::class, 'updateProfile']);


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
