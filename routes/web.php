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

Route::get('/setting',[SettingController::class, 'index']);
Route::get('/editSetting',[SettingController::class, 'editSetting']);

Route::get('/package',[PackageController::class, 'index']);
Route::get('/addNewPackage',[PackageController::class, 'addNewPackage']);

Route::get('/team',[TeamController::class, 'index']);
Route::get('/addnewteam',[TeamController::class, 'addnewteam']);

Route::get('/profile',[ProfileController::class, 'index']);
Route::get('/updateProfile',[ProfileController::class, 'updateProfile']);

Route::get('/blog',[BlogController::class, 'index']);
Route::get('/addnewblog',[BlogController::class, 'addnewblog']);