<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('home.index');
});

Route::get('/hinspector', function () {
    return view('home.Hinspector');
});

Route::get('/hinterior', function () {
    return view('home.Hinterior');
});

Route::get('/hconstruction', function () {
    return view('home.Hconstruction');
});

Route::get('/hbutler', function () {
    return view('home.Hbutler');
});



Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/manage_articles', function () {
    return view('admin.manage_articles');
});

Route::get('/admin/manage_articles/create', function () {
    return view('admin.create_article');
});

Route::get('/admin/manage_review_home', function () {
    return view('admin.manage_review_home');
});

Route::get('/admin/manage_faq', function () {
    return view('admin.manage_faq');
});

Route::get('/admin/change_password', function () {
    return view('admin.change_password');
});





Route::get('/about', function () {
    return "<h1>About Us</h1><p>This is the about page.</p>";
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/about', [AdminController::class, 'about']);