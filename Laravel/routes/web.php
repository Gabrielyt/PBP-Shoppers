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
Route::get('/cart/tambah_plus/{id_cart}','CartController@cart_plus');
Route::get('/cart/tambah_minus/{id_cart}','CartController@cart_minus');
#cart to oreder
Route::get('thankyou','CheckoutController@getThank');
Route::get('/checkout','CheckoutController@checkout');

Route::get('/order/tambah','TransController@tambah');

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
Route::get('/admin/listuser','AdminController@listuser');
Route::get('/admin/hapususer/{id}','AdminController@hapususer');
Route::post('/admin/userUpdate','AdminController@userUpdate');
Route::get('/admin/userUpdate/{id}','AdminController@tampilupdateuser');
Route::get('/admin/userHapus/{id}','AdminController@userHapus');

#login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');

Route::get('keranjang', 'CartController@keranjang');
Route::get('tokoview', 'PenjualController@tokoview');
Route::get('/toko/tambah', 'PenjualController@tampiltambah');
Route::post('/toko/tambah', 'PenjualController@insertbarang');
Route::get('/toko/edit/{id_barang}', 'PenjualController@tampilupdate');
Route::post('/toko/edit', 'PenjualController@updatedata');
Route::get('/toko/hapus/{id_barang}', 'PenjualController@hapusdata');
Route::get('/toko/pesanan', 'PenjualController@tampilpesanan');
Route::post('/toko/updatebarang', 'PenjualController@updatestatus');
