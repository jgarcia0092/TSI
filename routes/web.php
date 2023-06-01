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

Route::view('/', 'pages/home');
Route::view('about', 'pages/about', ['view' => 'help']);
Route::view('news', 'pages/news', ['view' => 'help']);
Route::view('testimonials', 'pages/testimonials', ['view' => 'help']);
Route::view('contact', 'pages/contact', ['view' => 'help']);

Route::group(['prefix' => 'services'], function () {
    Route::view('internet-kit', 'pages/services/internet-kit', ['view' => 'products']);
    Route::view('bandwidth-solutions-comparison-chart', 'pages/services/bandwidth', ['view' => 'solutions']);
    Route::view('satellite-bandwidth', 'pages/services/satellite', ['view' => 'products']);
    Route::view('point-to-point', 'pages/services/point-to-point', ['view' => 'solutions']);
    Route::view('fiber', 'pages/services/fiber', ['view' => 'solutions']);
    Route::view('event-wifi', 'pages/services/event-wifi', ['view' => 'products']);
    Route::view('venue-wifi', 'pages/services/venue-wifi', ['view' => 'products']);
    Route::view('event-it', 'pages/services/event-it', ['view' => 'products']);
    Route::view('wifi-captive-portal', 'pages/services/wifi-captive-portal', ['view' => 'products']);
});

Route::group(['prefix' => 'event-types'], function () {
    Route::view('automotive-events', 'pages/event-types/automotive-events', ['view' => 'events']);
    Route::view('corporate-events', 'pages/event-types/corporate-events', ['view' => 'events']);
    Route::view('entertainment-events', 'pages/event-types/entertainment-events', ['view' => 'events']);
    Route::view('gaming-events', 'pages/event-types/gaming-events', ['view' => 'events']);
    Route::view('exhibitors', 'pages/event-types/exhibitors', ['view' => 'events']);
    Route::get('marketing_events', 'SiteController@showMarketingEvents');
    Route::view('fashion-shows', 'pages/event-types/fashion-shows', ['view' => 'events']);
    Route::view('festivals', 'pages/event-types/festivals', ['view' => 'events']);
    Route::view('hackathons', 'pages/event-types/hackathons', ['view' => 'events']);
    Route::view('meetings-conferences', 'pages/event-types/meetings-conferences', ['view' => 'events']);
    Route::view('music-concerts-and-tours', 'pages/event-types/concerts-tours', ['view' => 'events']);
    Route::view('outdoor-events', 'pages/event-types/outdoor-events', ['view' => 'events']);
    Route::view('sporting-events', 'pages/event-types/sporting-events', ['view' => 'events']);
    Route::view('trade-shows', 'pages/event-types/trade-shows', ['view' => 'events']);
});

Route::view('recent-events', 'pages/recent-events', ['view' => 'reviews']);

Route::group(['prefix' => 'resources'], function () {
    Route::view('ballpark-estimator', 'pages/resources/ballpark-estimator', ['view' => 'products']);
    Route::view('bandwidth-calculator', 'pages/resources/bandwidth-calculator', ['view' => 'media']);
    Route::view('white-papers', 'pages/resources/white-papers', ['view' => 'media']);
    Route::view('consumer-rights', 'pages/resources/consumer-rights', ['view' => 'media']);
});

Route::group(['prefix' => 'help'], function () {
    Route::view('frequently-asked-questions', 'pages/help/faq', ['view' => 'help']);
});

Auth::routes(['register' => false]);

Route::get('/dashboard', 'LoggedInController@dashboard')->name('dashboard');
