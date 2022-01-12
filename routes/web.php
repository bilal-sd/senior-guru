<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\RegisteredAdminController;
use App\Http\Controllers\Admin\AuthenticatedSessionController;
use Illuminate\Auth\Events\Verified;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\Review;
use App\Models\Ameniti;

Route::redirect('/admin', '/admin/login');
Route::get('/', [FrontController::class, 'home']);
Route::get('/ParentNav', [FrontController::class, 'ParentNav']);
Route::get('category/{cat}', [FrontController::class, 'index'])->name("listing.page");
Route::get("/subCategory/{id}", [FrontController::class, 'subcategory']);
Route::get("/subCategory2/{id}", [FrontController::class, 'subcategory']);
Route::post('/search-listing', [FrontController::class, 'Listings']);
Route::get('/listing-details/{id}', [FrontController::class, 'listingdetails'])->name('listing.details');
// ========== Auth Jetstream =============
Route::get('/login', function () {
    return view('Auth.login');
})->name('login');
Route::get('/register', function () {
    return view('Auth.register');
})->name('register');
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('user-dashboard');
    });
});
Route::post('/listing/review/insert', [Review::class, 'store'])->name('listing.review.insert');
Route::prefix('admin')->group(function () {
    Route::post('/register', [RegisteredAdminController::class, 'store']);
    Route::get('/register', [RegisteredAdminController::class, 'create'])->name('admin-register');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin-logout');
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('admin-login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('admin-login-submit');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::view('/dashboard', 'admin.dashboard.default')->name('index');
        Route::view('index-02', 'admin.dashboard.dashboard-02')->name('index-02');
        // ........................... categories ...................
        Route::get('/categories/{parent_id?}', [CategoryController::class, 'index'])->name('admin.categories');
        // Route::get('/categories/show/{parent_id?}', [CategoryController::class, 'catChildAll'])->name('admin.categories.show');
        Route::get('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
        Route::post('/submit-categories', [CategoryController::class, 'store'])->name('Submit-Categories');
        Route::get('/categories/status/{id}', [CategoryController::class, 'status'])->name('admin.categories.status');
        // Route::get('/categories/reverse/{id}', [CategoryController::class, 'reverse'])->name('admin.categories.reverse');
        Route::get('/categories/select/', [CategoryController::class, 'show'])->name('admin.categories.select');
        // ............................. Listings ......................
        Route::get('/listing/create', [CategoryController::class, 'catChildAll'])->name('listing-create');
        Route::get('/listing/create-form/{slug?}', [ListingController::class, 'create'])->name('listing-form');
        Route::get('/categories/show-form/{level?}/{parent_id?}', [CategoryController::class, 'show'])->name('admin.listing-form.cats');
        Route::get('/listing/show', [ListingController::class, 'view'])->name('admin.listing');
        Route::get('/listing/get', [ListingController::class, 'index'])->name('admin.listing.show');
        Route::get('/listing/edit/{id}', [ListingController::class, 'edit'])->name('admin.listing.edit');
        Route::get('listing/delete/{id}', [ListingController::class, 'destroy'])->name('admin.listing.delete');
        Route::get('listing/img-delete/{id?}', [ListingController::class, 'filedelete'])->name('admin.listing.img-del');
        Route::post("/listing/insert", [ListingController::class, 'store'])->name('admin.listing.insert');
        Route::get('/listing/status/{id}', [ListingController::class, 'status'])->name('admin.listing.status');
        Route::post('/listing/floor',[FloorController::class,'store'])->name('admin.listing.floor');
        Route::any('/listing/floor/delete/{id}/{list_id}',[FloorController::class,'destroy'])->name('admin.listing.delete');
        // ..................... Locations ..................
        Route::get("/location/getcountry", [ListingController::class, 'getcountry'])->name('getcountry');
        Route::get("/location/getstates/{c_id}", [ListingController::class, 'getstates'])->name('getstates');
        Route::get("/location/getcities/{s_id}", [ListingController::class, 'getcities'])->name('getcities');
    });
});
