<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HouseController;
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

Route::get('/admin/compare', [HouseController::class, 'adminView']);

Route::get('/admin/houses', [HouseController::class, 'adminView'])->name('admin.houses.list');
Route::post('/admin/houses', [HouseController::class, 'store'])->name('admin.houses.store');

Route::get('/compare-houses', function () {
    return view('admin.compare.compare_frontend');
});

// Route::get('/', function () {
//     return view('home.');
// });
// Route::get('/', function () {
//     return view('home.');
// });
// Route::get('/', function () {
//     return view('home.');
// });
// Route::get('/', function () {
//     return view('home.');
// });
// Route::get('/', function () {
//     return view('home.');
// });













Route::get('/articles', function () {
    return view('home.article.article');
});

Route::get('articles/{id}', function ($id) {
    return view('home.article.test_article', ['id' => $id]);
});

Route::get('review_home/{id}', function ($id) {
    return view('home.article.review_home', ['id' => $id]);
});



Route::prefix('admin')->controller(AdminController::class)->group(function () {
    Route::get('/', 'index')->name('admin.index');
    Route::post('/upload_image', 'upload_image')->name('admin.upload');
    Route::get('/manage_article', 'article_manage')->name('admin.article');
    Route::get('/manage_article/create', 'article_create')->name('admin.article.create');
    Route::get('/manage_article/edit/{id}', 'article_edit')->name('admin.article.edit');

    Route::get('/manage_review_home', 'home_manage')->name('admin.home');
    Route::get('/manage_review_home/create', 'home_create')->name('admin.home.create');
    Route::get('/manage_review_home/edit/{id}', 'home_edit')->name('admin.home.edit');

    Route::get('/manage_faq', 'faq_manage')->name('admin.faq');
    Route::get('/manage_faq/edit/{id}', 'faq_edit')->name('admin.faq.edit');

    Route::get('/change_password', 'change_password')->name('admin.change_password');
});





