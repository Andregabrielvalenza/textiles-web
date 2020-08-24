<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'WebController@index')->name('home');
Route::get('/product-gallery', 'WebController@productoGalery')->name('product-gallery');
Route::get('/our-communities', 'WebController@ourCommunities')->name('our-communities');
Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/projects', 'WebController@projects')->name('projects');
Route::get('/contact', 'WebController@contact')->name('contact');
Route::get('/workshops', 'WebController@workshops')->name('workshops');
Route::get('/special-activity', 'WebController@specialActivity')->name('special-activity');
Route::get('/workshop-detail', 'WebController@workshopDetail')->name('workshop-detail');
Route::get('/projects-detail', 'WebController@projectsDetail')->name('projects-detail');
Route::get('/blog–artículo', 'WebController@blogArtículo')->name('blog–artículo');
Route::get('/contact-personalize-producto', 'WebController@contactPersonalizeProducto')->name('contact-personalize-producto');
Route::get('/donation-checkout', 'WebController@donationCheckout')->name('donation-checkout');
Route::get('/workshop-sign-up', 'WebController@workshopsignUp')->name('workshop-sign-up');
Route::get('/purchase-summery', 'WebController@purchaseSummery')->name('purchase-summery');
Route::get('/checkuot', 'WebController@checkuot')->name('checkuot');
Route::get('/about-us–our-team', 'WebController@aboutusOurteam')->name('about-us–our-team');
Route::get('/community-detail', 'WebController@communityDetail')->name('community-detail');
Route::get('/product-detail', 'WebController@productDetail')->name('product-detail');
Route::get('/about-us', 'WebController@aboutUs')->name('about-us');
Route::get('/get-involved', 'WebController@getInvolved')->name('get-involved');
Route::get('/thank-you-for-donating', 'WebController@thankyouforDonating')->name('thank-you-for-donating');
Route::get('/thank-you-for-registration', 'WebController@thankyouforRegistration')->name('thank-you-for-registration');
Route::get('/thank-you-for-you-purchase', 'WebController@thankyouforyouPurchase')->name('thank-you-for-you-purchase');
Route::get('/andean-textiles', 'WebController@andeanTextiles')->name('andean-textiles');

