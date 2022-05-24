<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Product;
use App\Http\Controllers\CartController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'products' => Product::paginate(5)->through(fn($product) => [
            'name' => $product->name,
            'href' => $product->href,
            'price' => $product->price,
            'description' => $product->description,
            'options' => $product->options,
            'imageSrc' => $product->imageSrc,
            'imageAlt' => $product->imageAlt
        ])
    ]);
});

Route::get('/products/{id}', [CartController::class, 'edit']);
Route::get('/products', [CartController::class, 'index'])->name('product');
Route::get('/products/delete/{id}', [CartController::class, 'destroy']);
Route::post('/products', [CartController::class, 'store']);


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
