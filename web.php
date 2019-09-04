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



Route::get('/satu', function () {
    // return view('welcome');
    echo "one";
});

Route::get('/dua', function () {
    // return view('welcome');
    echo "two";
});

Route::get('/tiga', function () {
    // return view('welcome');
    echo "three";
});

Route::get('/empat', function () {
    // return view('welcome');
    echo "four";
});

Route::get('/lima', function () {
    // return view('welcome');
    echo "five";
});

Route::get('/enam', function () {
    // return view('welcome');
    echo "six";
});

Route::get('/tujuh', function () {
    // return view('welcome');
    echo "seven";
});

Route::get('/delapan', function () {
    // return view('welcome');
    echo "eight";
});

Route::get('/sembilan', function () {
    // return view('welcome');
    echo "nine";
});
// 1. echo langsung nested
Route::get('/sepuluh', function () {
    // return view('welcome');
    echo "ten";
});



Route::get('/sepuluh', function () {
    return view('telo');
    echo "ten";
});

Route::get('/template', function () {
    return view('template');
});

// manggil controller
Route::get('/usang','UsangController@index');
/*file controllernya namanya UsangController
nama url Usang
index nama functionnya

*/
Route::get('/jeruk','UsangController@godog');
// terong buat manggil di Web
// UsangController digunakan untuk controllernya --- mengaktifkannya di cmd "php artisan make:controller jeruk"
// sandal functionnya
// godog index

// Route::get('/','kontrak@index');

Route::get('/CleaningService','cleaning@tables');

Route::resource('kontak','Kontak');

Route::get('/', function(){
  return view('index');
});

Route::get('login','Login@index');


Route::post('login/cek','Login@trader_cdlbreakaway');

Route::get('/','Dashboard@index');

Route::resource('kabupaten','Kabupaten');

Route::resource('penjualan','penjualan');

Route::resource('barang','barang');

Route::resource('pembelian','pembelian');