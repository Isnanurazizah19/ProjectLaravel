<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\UserController;
use App\Http\Controller\ProductController;
Use App\Models\Product;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
});
Route::get('/produk', function () {
    return view('produk');
});


Route::get('/about', function () {
    return 'Halaman About';
});

Route::get('/about                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});

Route::get('/products', 'ProductController@index');

Route::get('/products', function () {
    $products = App\Models\Product::all();
    return view('products.index', ['products' => $products]);
});

Route::get('profile',function(){
    $nama = "Isna Nurazizah";
    return view('profile.index', compact('nama'));
});