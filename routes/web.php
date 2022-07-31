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

// for frontend

use App\Http\Controllers\Frontend\FrontHomeController;
use App\Http\Controllers\Frontend\FrontPackageController;
use App\Http\Controllers\Frontend\FrontVendorController;
use App\Http\Controllers\Frontend\FrontUserController;
use App\Http\Controllers\FrontLoginController;
use App\Http\Controllers\PaymentController;


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

// for frontEnd homecontroller can handel blog, gallery, contact, aboutus page
Route::get('/',[FrontHomeController::class, 'home']);
Route::get('aboutus/',[FrontHomeController::class, 'aboutus']);
Route::get('contactus/',[FrontHomeController::class, 'contactus']);
Route::get('blogs/',[FrontHomeController::class, 'blogs']);
Route::get('blog-detail/{title}',[FrontHomeController::class, 'blogdetail']);

// manage packages
Route::get('packages/',[FrontPackageController::class, 'index']);
Route::get('packagedetail/{id}',[FrontPackageController::class, 'packagedetail']);
Route::get('/filter-category/{id}',[FrontPackageController::class, 'showpackage']);


Route::get('vendor-login/',[FrontVendorController::class, 'vendorlogin']);



Route::get('vendor-profile/',[FrontVendorController::class, 'vendorprofile']);
Route::get('update-profile/',[FrontVendorController::class, 'vendorupdate']);
Route::get('invoice/',[FrontVendorController::class, 'vendorinvoice']);
Route::get('change-password/',[FrontVendorController::class, 'changepassword']);
Route::get('mypackages/',[FrontVendorController::class, 'mypackages']);
Route::get('addnew-package/',[FrontVendorController::class, 'addnewpackage']);
// package
Route::post('add-vendorPackage/',[FrontVendorController::class, 'addnewVendorpackage']);
Route::post('update-vendorPackage/',[FrontVendorController::class, 'updateVendorpackage']);
Route::post('/mypackage/loadtable',[FrontVendorController::class, 'loadtable']);
Route::get('/mypackage/delete/{id}',[FrontVendorController::class, 'delete']);
Route::post('/mypackage/destroy',[FrontVendorController::class, 'destroy']);
Route::get('/update-package/{id}',[FrontVendorController::class, 'edit']);
Route::get('/package/subpackage-info/{id}',[FrontVendorController::class, 'subpackageIfno']);
Route::get('vendor-invoice-detail/{id}',[FrontVendorController::class, 'vendorInvloiceDetail']);//sser package detail

// update vendor and user profile
Route::post('update-profile/',[FrontUserController::class, 'updateprofile']);
Route::get('user-invoice-detail/{id}',[FrontUserController::class, 'userInvloiceDetail']);//sser package detail
Route::post('password-change/',[FrontUserController::class, 'passwordchange']);
// update vendor and user profile

// usercontroller
Route::get('user-profile/',[FrontUserController::class, 'userprofile']);
Route::get('user-update-profile/',[FrontUserController::class, 'userupdate']);
Route::get('user-change-password/',[FrontUserController::class, 'userchangepassword']);


// user authentication
Route::get('user-login/',[FrontLoginController::class, 'userlogin']);
Route::post('login-user/',[FrontLoginController::class, 'loginuser']);//actual login user
Route::get('user-logout/',[FrontLoginController::class, 'logout']);
// vendor auth
Route::post('login-vendor/',[FrontLoginController::class, 'loginvendor']);
Route::get('vendor-logout/',[FrontLoginController::class, 'vendorLogout']);


Route::get('user-register/',[FrontHomeController::class, 'userregister']);
Route::post('register-user/',[FrontLoginController::class, 'registeruser']);//actual residter

// user auth end?




// payment or invoices
Route::post('collect_data/',[PaymentController::class, 'collectData']);//actual residter
Route::post('payFonepay/',[PaymentController::class, 'payFonepay']);//payment via fonepay
Route::get('payFonepaySu/',[PaymentController::class, 'payFonepaySu']);//fone pay success
// payment via esewa
Route::post('payeSewapay/',[PaymentController::class, 'payeSewapay']);//actual residter

Route::get('/payment-verify/',[PaymentController::class, 'verify']);//actual residter




// payment and invoices






















// Login
// Route::get('/login',[LoginController::class, 'login']);
Route::post('/loginadmin',[LoginController::class, 'postLogin'])->name('login');
Route::get('/dashboard',[LoginController::class, 'dashboard']);
Route::get('/logout',[LoginController::class, 'logout']);

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



