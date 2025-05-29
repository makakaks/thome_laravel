<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TestController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\Test;

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

Route::get('/lang/{locale}', [TestController::class, 'setLocale'])->name('lang.change');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/hinspector', function () {
    return view('home.service.hinspector');
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

Route::get('/Review-home', function () {
    return view('home.review-home');
});

Route::get('/contactus', function () {
    return view('home.contactus');
});


Route::get('/ourteam', function () {
    return view('home.aboutus.ourteam');
});

Route::get('/ourstory', function () {
    return view('home.aboutus.ourstory');
});


Route::get('review_home/{id}', function ($id) {
    return view('home.article.review_home', ['id' => $id]);
});

Route::prefix('articles')->controller(ArticleController::class)->group(function () {
    // Route::get('/', 'index')->name('admin.index');
    Route::get('/{slug}', 'show_article')->name('article.show');
});


Route::prefix('admin')->controller(AdminController::class)->group(function () {
    Route::get('/', 'index')->name('admin.index');
    Route::post('/upload_image', 'upload_image')->name('admin.upload');
    Route::get('/manage_article', 'article_manage')->name('admin.article');
    Route::get('/manage_article/create', 'article_create')->name('admin.article.create');
    Route::post('/manage_article/create', 'article_create_store')->name('admin.article.create-post');
    Route::get('/manage_article/edit/{id}', 'article_edit')->name('admin.article.edit');
    Route::delete('/manage_article/delete/{id}', 'article_delete')->name('admin.article.delete');

    Route::get('/manage_review_home', 'home_manage')->name('admin.home');
    Route::get('/manage_review_home/create', 'home_create')->name('admin.home.create');
    Route::get('/manage_review_home/edit/{id}', 'home_edit')->name('admin.home.edit');

    Route::get('/manage_faq', 'faq_manage')->name('admin.faq');
    Route::get('/manage_faq/edit/{id}', 'faq_edit')->name('admin.faq.edit');

    Route::get('/change_password', 'change_password')->name('admin.change_password');
});





Route::prefix('test')->controller(TestController::class)->group(function () {
    Route::get('/create', 'create_article')->name('test.create_article');
    Route::get('/create_tag', 'create_tag')->name('test.create_tag');
    Route::get('/delete_tag', 'delete_tag')->name('test.delete_tag');
    Route::get('/create_tag_article', 'create_tag_article')->name('test.create_tag_article');
});