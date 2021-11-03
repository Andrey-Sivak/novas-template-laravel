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

Route::get('/', function () {
    return view('pages.home-page.homepage');
});

$shopGroupData = [
    'namespace' => 'Shop',
    'prefix' => 'shop',
];

Route::group($shopGroupData, function () {
    Route::resource('shop-cart', 'CartController');
    Route::resource('check-out', 'CheckOutController');
    Route::resource('my-account', 'MyAccountController');
    Route::resource('shop-single-v2', 'SingleV2Controller');
    Route::resource('shop-full-width', 'ShopFullWidthController');
});

Route::group(['namespace' => 'Pages'], function () {
    Route::resource('about-us', 'AboutController');
    Route::resource('contact-us', 'ContactController');
    Route::resource('coming-soon', 'ComingSoonController');
    Route::resource('error', 'ErrorController');
});


$ElementsGroupData = [
    'namespace' => 'Elements',
    'prefix' => 'elements'
];

Route::group($ElementsGroupData, function () {
   Route::resource('banner', 'BannerController');
   Route::resource('our-team', 'OurTeamController');
   Route::resource('testimonial', 'TestimonialController');
   Route::resource('countdown-timer', 'CountdownTimerController');
   Route::resource('mailchimp-form', 'MailchimpFormController');
   Route::resource('product-showcase', 'ProductShowcaseController');
});






