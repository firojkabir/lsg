<?php

/*--------------------start Home Controller routes-----------------*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/products', function () {
    return view('frontend.products');
});

Route::get('/product-details', function () {
    return view('frontend.product-details');
});

Route::get('/cart-summery', function () {
    return view('frontend.cart-summery');
});

Route::get('/profile', function () {
    return view('frontend.profile');
});

Route::get('/basket', function () {
    return view('frontend.include.profile.basket');
});

Route::get('/my_order', function () {
    return view('frontend.include.profile.my_order');
});

Route::get('/change_pass', function () {
    return view('frontend.include.profile.change_pass');
});

Route::get('/edit_profile', function () {
    return view('frontend.include.profile.edit_profile');
});

Route::get('/logout', function () {
    return view('frontend.include.profile.logout');
});

Route::get('/computer', function () {
    return view('frontend.include.category.computer');
});

Route::get('/gadgets', function () {
    return view('frontend.include.category.gadgets');
});

Route::get('/women_products', function () {
    return view('frontend.include.category.women_products');
});

Route::get('/men_products', function () {
    return view('frontend.include.category.men_products');
});

Route::get('/kids_products', function () {
    return view('frontend.include.category.kids_products');
});

Route::get('/food_beverage', function () {
    return view('frontend.include.category.food_beverage');
});

Route::get('/health_beauty', function () {
    return view('frontend.include.category.health_beauty');
});

Route::get('/sports_leisure', function () {
    return view('frontend.include.category.sports_leisure');
});

Route::get('/book_entertainment', function () {
    return view('frontend.include.category.book_entertainment');
});


Route::get('/login','Auth\ClientLoginController@showLoginForm')->name('client.login');
Route::post('/login', 'Auth\ClientLoginController@login')->name('client.login.submit');
Route::get('logout/', 'Auth\ClientLoginController@logout')->name('client.logout');


/*----------------------login, logout, Authentication-----------*/
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Auth::routes(['register' => false]);
});

/*---------------------user, admin panel------------------------*/
Route::get('/admin', 'Admin\AdminController@index')->name('admin');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {

    /*---------------------User Admin Controller ---------------------*/
    Route::prefix('/user')->group(function () {
        Route::get('/', 'UserAdmin@userlist')->name('a_userlist');
        Route::any('/edit/{id}', 'UserAdmin@userEdit')->name('a_userEdit');
        Route::get('/delete/{id}', 'UserAdmin@userDelete')->name('a_userDelete');
        Route::get('/status/{id}/{value}', 'UserAdmin@userStatus')->name('a_userStatus');
        Route::any('/add', 'UserAdmin@userAdd')->name('a_userAdd');
        Route::any('/password', 'UserAdmin@userPassword')->name('a_userPassword');

    });

    /*---------------------Admin Home Content (slider)---------------*/

    Route::prefix('/home')->group(function () {

        Route::prefix('/slider')->group(function () {
            Route::get('/', 'HomeAdmin@slider')->name('a_slider');
            Route::any('/add', 'HomeAdmin@sliderAdd')->name('a_sliderAdd');
            Route::any('/edit/{id}', 'HomeAdmin@sliderEdit')->name('a_sliderEdit');
            Route::get('/delete/{id}', 'HomeAdmin@sliderDelete')->name('a_sliderDelete');
            Route::get('/status/{id}/{value}/{status}', 'HomeAdmin@sliderStatus')->name('a_sliderStatus');
        });

        Route::prefix('/category')->group(function () {
            Route::get('/', 'HomeAdmin@category')->name('a_category');
            Route::any('/add', 'HomeAdmin@categoryAdd')->name('a_categoryAdd');
            Route::any('/edit/{id}', 'HomeAdmin@categoryEdit')->name('a_categoryEdit');
            Route::get('/delete/{id}', 'HomeAdmin@categoryDelete')->name('a_categoryDelete');
            Route::get('/status/{id}/{value}/{status}', 'HomeAdmin@categoryStatus')->name('a_categoryStatus');
        });

    });
});

/*---------------- routes for shared hosting server-------------*/

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return "cache cleared successfully!";
});

Route::get('/clear-view', function () {
    $exitCode = Artisan::call('view:clear');
    return "view cleared successfully!";
});

Route::get('/clear-config', function () {
    $exitCode = Artisan::call('config:clear');
    return "config cleared successfully!";
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});