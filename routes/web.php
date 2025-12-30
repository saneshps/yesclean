<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("faq", [HomeController::class, 'faq'])->name('faq');
Route::get("our-story", [HomeController::class, 'about'])->name('our-story');
Route::get("contact", [HomeController::class, 'contact'])->name('contact');
Route::get("deals/{supplier?}", [HomeController::class, 'deals'])->name('deals');
Route::get("deals/{supplier?}/{status?}", [HomeController::class, 'thankDeals1'])->name('deals.thanks1');
Route::get("deals/{status?}", [HomeController::class, 'thankDeals2'])->name('deals.thanks2');
Route::get("blogs", [BlogController::class, 'blogs'])->name('blogs');
Route::get("blog-detail/{slug}", [BlogController::class, 'blogDetails'])->name('blog-detail');
Route::get("cleaning-chemicals", [HomeController::class, 'cleaningChemicals'])->name('cleaning-chemicals');
Route::get("category/{slug}", [ProductController::class, 'category'])->name('category');
Route::get("all-products", [ProductController::class, 'allProducts'])->name('all-products');
Route::get("product/{slug}", [ProductController::class, 'productDetails'])->name('product');
Route::get("gallery", [HomeController::class, 'gallery'])->name('gallery');
Route::post('load', [HomeController::class, 'searchajaxload'])->name('load');
Route::get('search/{slug}', [HomeController::class, 'search'])->name('search');
Route::post('gallery-load', [HomeController::class, 'galleryLoad'])->name('gallery-load');
Route::post('mail', [HomeController::class, 'mail'])->name('mail');
Route::post('request-quotation-mail', [HomeController::class, 'requestQuotationMail'])->name('request-quotation-mail');
Route::post('express-interest-mail', [HomeController::class, 'expressInterestMail'])->name('express-interest-mail');
Route::post('express-interest-mail-for-deals', [HomeController::class, 'expressInterestMailDeals'])->name('express-interest-mail-for-deals');
Route::post('request-call-back-mail', [HomeController::class, 'requestCallBackMail'])->name('request-call-back-mail');


Route::get("openhouse", [HomeController::class, 'openHouse'])->name('openhouse');
Route::post("registerevents", [HomeController::class, 'registerEvents'])->name('registerevents');
