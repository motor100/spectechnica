<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\AjaxController;


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

Route::get('/catalog/category', [MainController::class, 'category']);

Route::get('/catalog/subcategory', [MainController::class, 'subcategory']);

// Route::get('/category/{slug}', [MainController::class, 'category']);

// Route::get('/category/{cat}/{subcat}', [MainController::class, 'subcategory']);

Route::get('/catalog/product', [MainController::class, 'product']);

Route::get('/in-stock', [MainController::class, 'in_stock']);

Route::get('/upgrade-and-service', [MainController::class, 'upgrade_and_service']);

Route::get('/services', [MainController::class, 'services']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/contacts', [MainController::class, 'contacts']);

Route::get('/search', [MainController::class, 'search']);

Route::get('/videos', [MainController::class, 'videos']);

Route::get('/certificates', [MainController::class, 'certificates']);

Route::get('/manufacture', [MainController::class, 'manufacture']);

Route::get('/special-offer', [MainController::class, 'special_offer']);

Route::get('/privacy-policy', [MainController::class, 'privacy_policy']);

Route::get('/sitemap.xml', [SitemapController::class, 'sitemap']);

// Ajax
Route::get('/ajax/we-use-cookie', [AjaxController::class, 'we_use_cookie']);

require __DIR__.'/auth.php';
