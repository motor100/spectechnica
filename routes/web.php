<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SitemapController;


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

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/catalog', [MainController::class, 'catalog']);

// Route::get('/catalog/{slug}', [MainController::class, 'single_product']);

// Route::get('/category', [MainController::class, 'cat']);

// Route::get('/category/{slug}', [MainController::class, 'category']);

// Route::get('/category/{cat}/{subcat}', [MainController::class, 'subcategory']);

Route::get('/in-stock', [MainController::class, 'in_stock']);

Route::get('/upgrade-and-service', [MainController::class, 'upgrade_and_service']); // доработки и сервис

Route::get('/services', [MainController::class, 'services']); // услуги

Route::get('/about', [MainController::class, 'about']);

Route::get('/contacts', [MainController::class, 'contacts']);

Route::get('/search', [MainController::class, 'search']);



Route::get('/privacy-policy', [MainController::class, 'privacy-policy']);

Route::get('/sitemap.xml', [SitemapController::class, 'sitemap']);



require __DIR__.'/auth.php';
