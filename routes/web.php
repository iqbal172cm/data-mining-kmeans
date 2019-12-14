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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

    //Front
    Route::group(['namespace' => 'Front'], function () {
        //Admin
        Route::group(['prefix' => '/'], function(){
            //Home Page
            Route::group(['prefix' => '/'], function(){
                Route::get('/', 'HomeController@index')->name('home');
                Route::get('/home', 'HomeController@index')->name('home');
                Route::get('/about', 'HomeController@about')->name('about');
                Route::get('/visimisi', 'HomeController@visimisi')->name('visimisi');
                Route::get('/contact', 'HomeController@contact')->name('contact');
                // Route::get('/detail/{id?}', 'HomeController@detail')->name('detail');
               
            });
        });
    });
// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', 'DasborController@index')->name('dasbor');

//Admin
Route::group(['namespace' => 'Admin'], function () {
	//Admin
	Route::group(['prefix' => 'admin'], function(){
		//Dashboard
		Route::group(['prefix' => '/'], function(){
			Route::get('/', 'DashboardController@index')->name('dashboard');
		});


        //pegawai
        Route::group(['prefix' => 'pegawai' ], function(){
            Route::get('/', 'PegawaiController@index')->name('pegawai');
            Route::get('/create', 'PegawaiController@create')->name('pegawai_create');
            Route::post('/store', 'PegawaiController@store')->name('pegawai_store');
            Route::get('/edit/{id?}', 'PegawaiController@edit')->name('pegawai_edit');
            Route::post('/update/{id?}', 'PegawaiController@update')->name('pegawai_update');
            Route::get('/delete', 'PegawaiController@delete')->name('pegawai_delete');
        });

        // //olahan
        Route::group(['prefix' => 'olahan'], function(){
            Route::get('/', 'OlahanController@index')->name('olahan');
            Route::get('/create', 'OlahanController@create')->name('olahan_create');
            Route::post('/store', 'OlahanController@store')->name('olahan_store');
            Route::get('/edit/{id?}', 'OlahanController@edit')->name('olahan_edit');
            Route::put('/update/{id?}', 'OlahanController@update')->name('olahan_update');
            Route::get('/delete/{id?}', 'OlahanController@delete')->name('olahan_delete');
        });

        // //data Ikan
        Route::group(['prefix' => 'ikan'], function(){
            Route::get('/', 'IkanController@index')->name('ikan');
            Route::get('/create', 'IkanController@create')->name('ikan_create');
            Route::post('/store', 'IkanController@store')->name('ikan_store');
            Route::get('/edit/{id?}', 'IkanController@edit')->name('ikan_edit');
            Route::put('/update/{id?}', 'IkanController@update')->name('ikan_update');
            Route::get('/delete', 'IkanController@delete')->name('ikan_delete');
        });

        //produk
        Route::group(['prefix' => 'produk'], function(){
            Route::get('/', 'ProdukController@index')->name('produk');
            Route::get('/create', 'ProdukController@create')->name('produk_create');
            Route::post('/store', 'ProdukController@store')->name('produk_store');
            Route::get('/edit/{id?}', 'ProdukController@edit')->name('produk_edit');
            Route::put('update/{id?}', 'ProdukController@update')->name('produk_update');
            Route::get('/delete', 'ProdukController@delete')->name('produk_delete');
        });

        // penjualan
        Route::group(['prefix' => 'penjualan'], function(){
            Route::get('/', 'PenjualanController@index')->name('penjualan');
            Route::get('/create', 'PenjualanController@create')->name('penjualan_create');
            Route::post('/store', 'PenjualanController@store')->name('penjualan_store');
            Route::get('/edit/{id?}', 'PenjualanController@edit')->name('penjualan_edit');
            Route::put('/update/{id?}', 'PenjualanController@update')->name('penjualan_update');
            Route::get('/delete', 'PenjualanController@delete')->name('penjualan_delete');
            Route::get('cetak_pdf', 'PenjualanController@cetak_pdf');
        });

        // penyetokan
        Route::group(['prefix' => 'penyetokan'], function(){
            Route::get('/', 'PenyetokanController@index')->name('penyetokan');
            Route::get('/create', 'PenyetokanController@create')->name('penyetokan_create');
            Route::post('/store', 'PenyetokanController@store')->name('penyetokan_store');
            Route::get('/edit/{id?}', 'PenyetokanController@edit')->name('penyetokan_edit');
            Route::put('/update/{id?}', 'PenyetokanController@update')->name('penyetokan_update');
            Route::get('/delete', 'PenyetokanController@delete')->name('penyetokan_delete');
        });

        // proses
        Route::group(['prefix' => 'proses'], function(){
            Route::get('/', 'ProsesController@index')->name('proses');
        });

        // kmeans
        Route::group(['prefix' => 'kmeans'], function(){
            Route::get('/', 'KmeansController@index')->name('kmeans.index');
            Route::post('/proses', 'KmeansController@kmeans')->name('kmeans.kmeans');
        });

    });
});

