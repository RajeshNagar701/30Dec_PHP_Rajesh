<?php

use Illuminate\Support\Facades\Route;

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
    return view('website.index');
});

Route::get('/it_about', function () {
    return view('website.it_about');
});
Route::get('/it_service', function () {
    return view('website.it_service');
});

Route::get('/edit_profile', function () {
    return view('website.edit_profile');
});
Route::get('/it_blog', function () {
    return view('website.it_blog');
});
Route::get('/it_contact', function () {
    return view('website.it_contact');
});
Route::get('/login', function () {
    return view('website.login');
});
Route::get('/profile', function () {
    return view('website.profile');
});
Route::get('/signup', function () {
    return view('website.signup');
});

// Admin


Route::get('/admin_login', function () {
    return view('admin.index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/add_categories', function () {
    return view('admin.add_categories');
});
