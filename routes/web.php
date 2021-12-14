<?php

use App\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/listing-detail', function () {
    return view('listing-detail');
});

Auth::routes();
Route::get('/', 'frontend\ListingController@home');
Route::get('/Listing', 'frontend\ListingController@listing');
   
Route::prefix('user')->group(function(){
    Route::get('/logout', 'Auth\LoginController@logout')->name('user.logout');
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
    // ....................categories....................
    Route::get('/categories','CategoryController@index')->name('admin.categories');
    Route::get('/categories/show/{level?}/{parent_id?}','CategoryController@show')->name('admin.categories.show');
    Route::get('/categories/delete/{id}','CategoryController@destroy')->name('admin.categories.destroy');
    Route::get('/categories/status/{id}','CategoryController@status')->name('admin.categories.status');
    Route::post('/submit-categories','CategoryController@store')->name('Submit-Categories');
    //...............listing..................//
    Route::get('/listing','ListingController@view')->name('admin.listing');
    Route::get('/listing/show','ListingController@index')->name('admin.listing.show');
    Route::get('/listing/delete/{id}','ListingController@destroy')->name('admin.listing.delete');
    Route::post('/listing/insert','ListingController@store')->name('admin.listing.insert');
    Route::get('/listing/edit/{id}','ListingController@edit')->name('admin.listing.edit');
    Route::get('/listing-create','CategoryController@catChildAll')->name('admin.listing.create');
    Route::get('/logs',function(){
        return view('admin.audit-listing');
    })->name('admin.listing.audit');

    Route::get('/listing-form/{id?}',function($id){
        return view('admin.listing-form',['catId'=>$id]);
    })->name('admin.listing-form');
});
