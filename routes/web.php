<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome\WelcomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\App;

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

Route::get('/lang/{locale}', function ($locale) {

    session()->put('selectedlang', $locale);
    setcookie('selectedlang', $locale, time() + (60 * 24 * 30), '/');
    App::setLocale($locale);

    // Redirect back to the previous page
    return redirect()->back();
})->name('lang.switch');


// Route::get('/lang/{locale}', function () {
//     // $locale = app()->getLocale();
//     $locale = session('locale');
//     return $locale;
// });

Route::get('link', function () {
    Artisan::call('storage:link');
    return "yes link";
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/parties', [MainController::class, 'parties']);
Route::get('/brands', [MainController::class, 'brands']);
Route::get('/hunters', [MainController::class, 'hunters']);
Route::get('/faqs', [MainController::class, 'faqs']);

Route::get('/privacy', [MainController::class, 'privacy']);
Route::get('/term', [MainController::class, 'term']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('notification', [NotificationController::class, 'index']);
Route::post('sendNotification', [NotificationController::class, 'sendNotification'])->name('sendNotification');


Route::post('/store-token', [NotificationController::class, 'storeToken'])->name('store.token');
Route::get('/network-goals', function () {
    return view('network_goals');
})->name('network.goals');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/membership.request', function () {
    return view('membership_request');
})->name('membership.request');

Route::get('/news.details', function () {
    return view('news_details');
})->name('news.details');

Route::get('/message', function () {
    return view('message_network');
})->name('message');