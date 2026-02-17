<?php

use App\Http\Middleware\LoginMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FooterExpressController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\sliderController;

// Route::get('/', function () {
//     return view('home');
// });
Route::get("/" , [HomeController::class , "index"])->name('home');
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware([LoginMiddleware::class]);
Route::get('/signup', [UserController::class, "create"])->name('signup')->middleware([LoginMiddleware::class]);
Route::post('/check', [UserController::class, "checkAuth"])->name('checkAuth');

Route::group([
    'prefix' => 'users',
    'controller' => UserController::class,
    'as' => 'user.',
    'middleware' => [UserMiddleware::class]
], function () {
    Route::post("/store", "store")->name('store')->withoutMiddleware([UserMiddleware::class]);
    Route::post("/check", "check")->name('check')->withoutMiddleware([UserMiddleware::class]);
    Route::get("/logout", "logout")->name('logout');
    Route::get("/", "index")->name('list');
    Route::get("/panel/{user}", "panel")->name('panel');
    Route::get('/profile/{user?}', 'profile')->name('profile');
    Route::get('/show/{user}', 'show')->name('show');
    Route::get("/edit/{user}", "edit")->name('edit');
    Route::post("/update", "update")->name('update');
    Route::get("/delete/{user}", "delete")->name('delete');
    Route::get('/compelete', 'compelete_form')->name('compelete_form');
    Route::post('/save', 'save')->name('save');
    // Route::get('/admin/create', 'adminCreate')->name('adminCreate');
    // Route::post('/admin/store', 'adminStore')->name('adminStore')->withoutMiddleware([UserMiddleware::class]);
    Route::get('/setting', 'setting')->name('setting');
    Route::post('/set', 'set')->name('set');
    route::post('/set_order', 'set_order')->name('set_order');
    Route::get('/create_user', 'create_user')->name('create_user');
    Route::post('/store_user', 'store_user')->name('store_user');
});

Route::group([
    'prefix' => 'brands',
    'controller' => BrandsController::class,
    'as' => 'brand.',
], function () {
    Route::get("/create" , "create")->name('brandCreate');
    Route::post("/store", "store")->name('store');
    Route::get("/index", "index")->name('list');
    Route::get("/edit/{brand}", "edit")->name('edit');
    Route::post("/update", "update")->name('update');
    Route::get("/delete/{brand}", "delete")->name('delete');
});


Route::group([
    'prefix' => 'expresses',
    'controller' => FooterExpressController::class,
    'as' => 'express.',
], function () {
    Route::get("/create" , "create")->name('expressCreate');
    Route::post("/store", "store")->name('store');
    Route::get("/index", "index")->name('list');
    Route::get("/edit/{express}", "edit")->name('edit');
    Route::post("/update", "update")->name('update');
    Route::get("/delete/{express}", "delete")->name('delete');
});

Route::group([
    'prefix' => 'footerColumn',
    'controller' => FooterController::class,
    'as' => 'footer.',
], function () {
    Route::get("/create" , "create")->name('footerCreate');
    Route::post("/store", "store")->name('store');
    Route::get("/index", "index")->name('list');
    Route::get("/edit/{footer}", "edit")->name('edit');
    Route::post("/update", "update")->name('update');
    Route::get("/delete/{footer}", "delete")->name('delete');
});

Route::group([
    'prefix' => 'categories',
    'controller' => CategoryController::class,
    'as' => 'category.',
], function () {
    Route::get("/create" , "create")->name('create');
    Route::post("/store", "store")->name('store');
    Route::get("/index", "index")->name('list');
    Route::get("/show/{category}", "show")->name('show');
    Route::get("/edit/{category}", "edit")->name('edit');
    Route::post("/update", "update")->name('update');
    Route::get("/delete/{category}", "delete")->name('delete');
    Route::get("/productList/{category}", "proList")->name('proList');
});

Route::group([
    'prefix' => 'products',
    'controller' => ProductController::class,
    'as' => 'product.',
], function () {
    Route::get("/create" , "create")->name('create');
    Route::post("/store", "store")->name('store');
    Route::get("/index", "index")->name('list');
    Route::get("/show/{product}", "show")->name('show');
    Route::get("/edit/{product}", "edit")->name('edit');
    Route::post("/update", "update")->name('update');
    Route::get("/delete/{product}", "delete")->name('delete');
});

Route::group([
    'prefix' => 'siteSettings',
    'controller' => SettingController::class,
    'as' => 'setting.',
], function () {
    Route::get('/createLogo', 'createLogo')->name('createLogo');
    Route::post('/upsertLogo', 'upsertLogo')->name('upsertLogo');
    Route::get('/createDescription', 'createDescription')->name('createDescription');
    Route::post('/updateDescription', 'upsertDescription')->name('upsertDescription');
    Route::get('/createHeroBannerRight', 'createHeroBannerRight')->name('createHeroBannerRight');
    Route::post('/updateHeroBannerRight', 'upsertHeroBannerRight')->name('upsertHeroBannerRight');
    Route::get('/createHeroBannerLeft', 'createHeroBannerLeft')->name('createHeroBannerLeft');
    Route::post('/updateHeroBannerLeft', 'upsertHeroBannerLeft')->name('upsertHeroBannerLeft');
});


Route::group([
    'prefix' => 'sliders',
    'controller' => sliderController::class,
    'as' => 'slider.',
], function () {
    Route::get("/create", "create")->name('sliderCreate');
    Route::post("/store", "store")->name('store');
    Route::get("/index", "index")->name('list');
    Route::get("/edit/{slider}", "edit")->name('edit');
    Route::post("/update", "update")->name('update');
    Route::get("/delete/{slider}", "delete")->name('delete');
});
