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


/* Admin Routes  */

Route::get('/contact', [App\Http\Controllers\ContactPageController::class, 'contact'])->name('contact');

Route::get('/admin/home', [App\Http\Controllers\AdminHomeController::class, 'index'])->name('admin-home');

Route::get('/admin/create-news-post', [App\Http\Controllers\AdminNewsController::class, 'createNewsPost'])->name('create-new-post');
Route::get('/admin/search-news-posts', [App\Http\Controllers\AdminNewsController::class, 'searchNewsPosts'])->name('search-news-post');
Route::get('/admin/upload-images', [App\Http\Controllers\AdminGalleryController::class, 'uploadImages'])->name('upload-images');
Route::get('/admin/manage-gallery-images', [App\Http\Controllers\AdminGalleryController::class, 'manageGalleryImages'])->name('manage-galley-images');
Route::get('/admin/manage-gallery-categories', [App\Http\Controllers\AdminGalleryController::class, 'manageGalleryCategories'])->name('manage-galley-categories');
Route::get('/admin/create-team-member', [App\Http\Controllers\AdminTeamController::class, 'createTeamMember'])->name('create-team-member');
Route::get('/admin/manage-team-members', [App\Http\Controllers\AdminTeamController::class, 'manageTeamMembers'])->name('manage-team-members');
Route::get('/admin/create-contact', [App\Http\Controllers\AdminContactController::class, 'createContact'])->name('create-contact');
Route::get('/admin/manage-contacts', [App\Http\Controllers\AdminContactController::class, 'manageContacts'])->name('manage-contact');


