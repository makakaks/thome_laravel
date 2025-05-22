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
    return view('home.service.Hinspector');
});

Route::get('/hinterior', function () {
    return view('home.service.Hinterior');
});

Route::get('/hconstruction', function () {
    return view('home.service.Hconstruction');
});

Route::get('/hbutler', function () {
    return view('home.service.Hbutler');
});

Route::get('/article', function () {
    return view('home.article.article');
});

Route::get('article/{id}', function ($id) {
    return view('home.article.article', ['id' => $id]);
});

Route::get('review_home/{id}', function ($id) {
    return view('home.article.review_home', ['id' => $id]);
});



Route::prefix('admin')->controller(AdminController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/manage_article', 'article_manage');
    Route::get('/manage_article/create', 'article_create');
    Route::get('/manage_article/edit/{id}', 'article_edit');
    
    Route::get('/manage_review_home', 'home_manage');
    Route::get('/manage_review_home/create', 'home_create');
    Route::get('/manage_review_home/edit/{id}', 'home_edit');

    Route::get('/manage_faq', 'faq_manage');
    Route::get('/manage_faq/edit/{id}', 'faq_edit');

    Route::get('/change_password', 'change_password');
});



Route::get('/about', function () {
    return "<h1>About Us</h1><p>This is the about page.</p>";
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/about', [AdminController::class, 'about']);