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
#cart
Route::get('/', 'BarangController@home');
Route::get('/cart','CartController@cart');
Route::get('/cart/tambah/{id_barang}','CartController@cart_tambah');
Route::get('/cart/hapus/{id_cart}','CartController@hapus');

Route::get('/checkout','CheckoutController@checkout');

#Route::get('/toko', 'BarangController@home');
Route::get('/tambah', 'BarangController@tambah');
Route::get('/hapus/{id}','BarangController@hapus');
Route::get('/tampilupdate/{id}', 'BarangController@tampilupdate'); #Menampilkan data yang akan di update
Route::post('/update','BarangController@updatedata');


#admin
Route::get('/admin/login','AdminController@login');
Route::post('/admin/ceklogin','AdminController@authcek');
Route::post('/queryinsert','AdminController@insertbarang');
Route::get('/admin','AdminController@admin');
Route::get('/admin/tambahdata','AdminController@tampil');
Route::get('/admin/listdata','AdminController@list');
Route::get('/admin/tampilupdate/{id_barang}','AdminController@tampilupdate');
Route::post('/admin/update','AdminController@updatedata');
Route::get('/admin/hapus/{id_barang}','AdminController@hapus');

#login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');
