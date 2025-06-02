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
    return view('home.service.HbutlerComingSoon');
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
        Route::delete('/{id}', 'delete')->name('admin.faq.delete');
        Route::post('/', 'create_store')->name('admin.faq.create');
        Route::put('/{id}', 'edit_store')->name('admin.faq.edit');
    });

    Route::post('/upload_image', [AdminController::class, 'upload_image'])->name('admin.upload');
    Route::get('/change_password', [AdminController::class, 'change_password_view'])->name('admin.change_password');
});





Route::prefix('api')->group(function () {
    Route::prefix('faq')->controller(FaqController::class)->group(function () {
        Route::get('/', 'get_all')->name('api.faq.get_all');
    });
});

// Route::prefix('test')->controller(TestController::class)->group(function () {
//     Route::get('/create', 'create_article')->name('test.create_article');
//     Route::get('/create_tag', 'create_tag')->name('test.create_tag');
//     Route::get('/delete_tag', 'delete_tag')->name('test.delete_tag');
//     Route::get('/create_tag_article', 'create_tag_article')->name('test.create_tag_article');
// });