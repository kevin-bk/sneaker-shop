<?php

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

use Illuminate\Support\Facades\Route;



Route::namespace('Site')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Route::post('/newsletter', 'NewsletterController@check');

    // user
    Route::get('users/activemail', 'UserController@activeMail');

    // member
    Route::get('member/activemail', 'MemberController@activeMail');
    Route::get('member/login', 'MemberController@login')->name('login');
    Route::post('member/login', 'MemberController@handleLogin');
    Route::get('member/register', 'MemberController@register')->name('register');
    Route::post('member/register', 'MemberController@handleRegister');
    Route::get('member/forgot', 'MemberController@forgot')->name('forgot');
    Route::post('member/forgot', 'MemberController@handleForgot');
    Route::get('member/login-social/{provider}', 'MemberController@loginSocial');
    Route::get('member/callback/{provider}', 'MemberController@callbackSocial');

    Route::middleware(['auth.web'])->group(function () {
        // member
        Route::get('member', 'MemberController@index');
        Route::get('member/update-profile', 'MemberController@updateProfile');
        Route::post('member/update-profile', 'MemberController@handleUpdateProfile');
        Route::get('member/change-password', 'MemberController@changePassword');
        Route::post('member/change-password', 'MemberController@handleChangePassword');
        Route::get('member/logout', 'MemberController@logout');
    });

    // post
    Route::get('/'.config('constant.URL_PREFIX_POST').'/{slugCategory}/{slugPost}.html', 'PostController@view');
    Route::get('/'.config('constant.URL_PREFIX_POST').'/{slugPost}.html', 'PostController@view');
    Route::get('/'.config('constant.URL_PREFIX_POST').'/{slugCategory}', 'PostController@index');
    Route::get('/'.config('constant.URL_PREFIX_POST'), 'PostController@index');

    //newsletter
    Route::post('newsletter', 'NewsLetterController@check');


    // product
    Route::get(
        '/'.config('constant.URL_PREFIX_PRODUCT').'/{slugProductCategory}/{slugProduct}.html',
        'ProductController@view'
    );
    Route::get('/'.config('constant.URL_PREFIX_PRODUCT').'/{slugProduct}.html', 'ProductController@view');
    Route::get('/'.config('constant.URL_PREFIX_PRODUCT').'/{slugCategory}', 'ProductController@index');
    Route::get('/'.config('constant.URL_PREFIX_PRODUCT'), 'ProductController@index')->name('product');

    // page
    Route::get('/'.config('constant.URL_PREFIX_PAGE').'/{slugCategory}', 'PageController@view');
    Route::get('404.html', 'PageController@notfound');
    Route::get('maintenance', 'PageController@maintenance');

    // tag
    Route::get('/'.config('constant.URL_PREFIX_TAG').'/{slug}', 'TagController@index');
    Route::get('search', 'SearchController@index')->name('search');

    // cart
    Route::get('cart', 'CartController@index')->name('cart');
    Route::get('cart/delete/{id}', 'CartController@delete');
    Route::get('cart/checkout', 'CartController@checkout')->name('checkout');
    Route::get('cart/checkout/{token_checkout}', 'CartController@checkout');
    Route::get('cart/checkout-success/{token_checkout}', 'CartController@checkoutSuccess');
    Route::post('cart/checkout/{token_checkout}', 'CartController@checkoutSave');
    Route::post('cart/add', 'CartController@add');

    // sitemap
    Route::get('sitemap.xml', 'SitemapController@index');

    // contact 
    Route::post('contact/register-email', 'ContactController@registerEmail');
    Route::post('contact', 'ContactController@addContact');


    // comment
    Route::post('comment/create', 'CommentController@addComment')->name('comment');
    Route::delete('/comments/{comment}', 'CommentController@destroy')->name('xoacmt');

    // tool
    Route::get('sl/{short_link}', 'ToolController@shortLink');

    // college
    Route::get('/'.config('constant.URL_PREFIX_COLLEGE').'/{slug}.html', 'CollegeController@view');
    Route::get('/'.config('constant.URL_PREFIX_COLLEGE'), 'CollegeController@index');
    Route::get('/scholarships', 'CollegeController@scholarship');
});