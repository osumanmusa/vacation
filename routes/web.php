<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBookingsController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminProfileController;

use App\Http\Controllers\RoutesController;
use App\Http\Controllers\BookingsController;
use App\Http\Middleware\Authenticate;


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
    return Inertia::render('Welcome');
});

Route::get('/packages', function () {
    return Inertia::render('Packages');
});
Route::get('/packagedetails', function () {
    return Inertia::render('Packagedetails');
});
Route::get('/Searchpackage', function () {
    return Inertia::render('Searchpackage');
});
Route::get('/Searchedpackage', function () {
    return Inertia::render('Searchedpackage');
});
Route::get('/Searchedpackagedetail', function () {
    return Inertia::render('Searchedpackagedetail');
});
Route::get('/Cart', function () {
    return Inertia::render('Cart');
});
Route::get('/Support', function () {
    return Inertia::render('Support');
});
Route::get('/Contact', function () {
    return Inertia::render('Contact');
});



Route::group(['middleware' => 'auth'], function() {

    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, "home"]);

/*------------------------------------------
--------------------------------------------
All SuperAdmin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware' => 'checkRole:superadmin'], function() {
    Route::get("/superadminhome", [SuperAdminController::class, "dashboard"])->name('superadmin.home');

});


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
    Route::group(['middleware' => 'checkRole:admin'], function() {
        Route::get("/adminhome", [AdminController::class, "dashboard"])->name('admin.home');
        Route::get("/admin/bookings", [AdminBookingsController::class, "index"])->name('admin.bookings');
        Route::get("/admin/view-booking", [AdminBookingsController::class, "show"])->name('admin.view-booking');
        Route::get("/admin/users", [AdminUsersController::class, "index"])->name('admin.users');
        Route::get("/admin/view-users", [AdminUsersController::class, "show"])->name('admin.view-users');
        Route::get("/admin/add-admin", [AdminUsersController::class, "create"])->name('admin.add-admin');

        Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::post('/admin/store-profile', [AdminProfileController::class, 'store'])->name('admin.profile.edit');

    });


/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/

    Route::group(['middleware' => 'checkRole:user'], function() {
        Route::inertia('/userhome', 'Users/dashboard',[
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        ])->name('user.home');

        Route::get("/userbookings", [BookingsController::class, "index"])->name('user.bookings');
        Route::get('/userprofile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    });


});

require __DIR__.'/auth.php';
