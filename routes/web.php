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

Route::get('/', function () {
    return view('Auth.login');
});

Auth::routes();

Route::get('logout/', 'Auth\LoginController@logout')->name('user.logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
    Route::get('/categories','CategoryController@index')->name('admin.categories');
    Route::get('/categories/show/{level?}/{parent_id?}','CategoryController@show')->name('admin.categories.show');
    Route::get('/categories/delete/{id}','CategoryController@destroy')->name('admin.categories.destroy');
    Route::get('/categories/status/{id}','CategoryController@status')->name('admin.categories.status');
    Route::post('/submit-categories','CategoryController@store')->name('Submit-Categories');
    Route::get('/listing',function(){
        return view('admin.listing');
    })->name('admin.listiing');
    Route::get('/listing-create','CategoryController@catChildAll')->name('admin.listiing.create');

    Route::get('/logs',function(){
        return view('admin.audit-listing');
    })->name('admin.listiing.audit');

    Route::get('/listing-form/{id?}',function($id){
        return view('admin.listing-form',['catId'=>$id]);
    })->name('admin.listing-form');
});



