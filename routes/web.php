<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ReviewHomeController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\Test;
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

Route::get('/lang/{locale}', [TestController::class, 'setLocale'])->name('lang.change');

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
    return view('home.service.HbutlerComingSoon');
});

Route::get('/Review-home', function () {
    return view('home.Review-home');
});

Route::get('/contactus', function () {
    return view('home.contact.contactus');
});

Route::get('/joinwithus', function() {
    return view('home.contact.joinwithus');
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

Route::prefix('addon_service')->group(function () {
    Route::get('/app_inspector', function () {
        return view('home.addon_service.app_inspector');
    });
    Route::get('/cal_electric', function () {
        return view('home.addon_service.cal_electric');
    });
    Route::get('/checklist', function () {
        return view('home.addon_service.checklist');
    });
});

Route::get('/testkub', function(){
    return view('home.article.test_article');
});

Route::get('review_home/{id}', function ($id) {
    return view('home.article.review_home', ['id' => $id]);
});

Route::prefix('articles')->controller(ArticleController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/test_paginate', 'test_paginate')->name('article.test_paginate');
    Route::get('/{slug}', 'show_article')->name('article.show');
});


Route::prefix('admin')->group(function () {
    Route::prefix('manage_article')->controller(ArticleController::class)->group(function () {
        Route::get('/', 'manage')->name('admin.article.manage');
        Route::delete('/{id}', 'delete')->name('admin.article.delete');

        Route::get('/create', 'create_view')->name('admin.article.create_view');
        Route::post('/create', 'create_store')->name('admin.article.create_store');

        Route::get('/edit/{id}', 'edit_view')->name('admin.article.edit_view');
        Route::put('/edit/{id}', 'edit_store')->name('admin.article.edit_store');

        Route::post('/add_tag', 'create_tag')->name('admin.article.create_tag');
    });

    Route::prefix('manage_review_home')->controller(ArticleController::class)->group(function () {
        Route::get('/', 'manage')->name('admin.home.manage');
        Route::delete('/{id}', 'delete')->name('admin.home.delete');

        Route::get('/create', 'create_view')->name('admin.home.create_view');
        Route::post('/create', 'create_store')->name('admin.home.create_store');

        Route::get('/edit/{id}', 'edit_view')->name('admin.home.edit_view');
        Route::put('/edit/{id}', 'edit_store')->name('admin.home.edit_store');
    });

    Route::prefix('manage_faq')->controller(FaqController::class)->group(function () {
        Route::get('/', 'manage')->name('admin.faq.manage');
        Route::post('/', 'create_store')->name('admin.faq.create');
        Route::delete('/{id}', 'delete')->name('admin.faq.delete');
        Route::put('/{id}', 'edit_store')->name('admin.faq.edit');

        Route::post('/add_tag', 'create_tag')->name('admin.faq.add_tag');
    });

    Route::post('/upload_image', [AdminController::class, 'upload_image'])->name('admin.upload');
    Route::get('/change_password', [AdminController::class, 'change_password_view'])->name('admin.change_password');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/houses', [HouseController::class, 'adminView'])->name('houses.index');
    Route::post('/houses', [HouseController::class, 'store'])->name('houses.store');
});

Route::prefix('api')->group(function () {
    Route::get('/houses', [HouseController::class, 'apiIndex']);
    Route::get('/houses/{id}', [HouseController::class, 'apiShow']);
});

Route::get('/compare-houses', function () {
    return view('admin.compare.compare_frontend');
});

Route::get('/admin/compare-house', [HouseController::class, 'adminView'])->name('admin.compare.compare_house');

Route::get('/admin/compare/compare_frontend', [HouseController::class, 'compareFrontend'])->name('admin.compare.compare_frontend');

Route::get('/admin/compare/comparison', [HouseController::class, 'comparisonView'])->name('admin.compare.comparison');

Route::prefix('api')->group(function () {
    Route::get('/houses', [HouseController::class, 'apiIndex']);
    Route::get('/houses/{id}', [HouseController::class, 'apiShow']);
});

// Route::prefix('test')->controller(TestController::class)->group(function () {
//     Route::get('/create', 'create_article')->name('test.create_article');
//     Route::get('/create_tag', 'create_tag')->name('test.create_tag');
//     Route::get('/delete_tag', 'delete_tag')->name('test.delete_tag');
//     Route::get('/create_tag_article', 'create_tag_article')->name('test.create_tag_article');
// });
