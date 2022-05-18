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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('landing');
Route::get('/about-shree', [App\Http\Controllers\AboutPageController::class, 'aboutShree'])->name('about-shree');
Route::get('/shree-team', [App\Http\Controllers\AboutPageController::class, 'shreeTeam'])->name('shree-team');
Route::get('/shree-certification', [App\Http\Controllers\AboutPageController::class, 'shreeCertification'])->name('shree-certification');
Route::get('/cima', [App\Http\Controllers\CoursePageController::class, 'cima'])->name('cima');
Route::get('/acca', [App\Http\Controllers\CoursePageController::class, 'acca'])->name('acca');
Route::get('/news', [App\Http\Controllers\NewsPageController::class, 'news'])->name('news');
Route::get('/gallery', [App\Http\Controllers\GalleryPageController::class, 'gallery'])->name('gallery');
Route::get('/faq', [App\Http\Controllers\FaqPageController::class, 'faq'])->name('faq');
Route::get('/inquiry', [App\Http\Controllers\InquiryPageController::class, 'inquiry'])->name('inquiry');
Route::get('/contact', [App\Http\Controllers\ContactPageController::class, 'contact'])->name('contact');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


