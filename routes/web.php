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

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'ClientPagesController@home');

Route::get('/admin', 'DashboardController@index')->name('dashboard');

Auth::routes(['register' => true]);

Route::get('event/{id}/gallery', 'EventController@gallery')
    ->name('event.gallery');


Route::get('article/{id}/gallery', 'ArticleController@gallery')
    ->name('article.gallery');

Route::get('review/{id}/gallery', 'ReviewController@gallery')
    ->name('review.gallery');


Route::resource('event', 'EventController');

Route::resource('event_galleries', 'EventGalleryController');

Route::resource('speaker', 'SpeakerController');

Route::resource('article', 'ArticleController');

Route::resource('article_galleries', 'ArticleGalleryController');

Route::resource('review', 'ReviewController');

Route::resource('review_galleries', 'ReviewGalleryController');

Route::resource('message', 'MessageController');

Route::resource('registration', 'RegistrationController');


Route::get('detail/{slug}', 'ClientPagesController@detail');

Route::get('EventList', 'ClientPagesController@eventGalleri');

Route::get('artikel/{id}', 'ClientPagesController@artikel');

Route::get('ArtikelList', 'ClientPagesController@artikelGalleri');

Route::post('Pesan', 'ClientPagesController@pesan');

Route::get('ckeditor', 'CkeditorController@index');

Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

