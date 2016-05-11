<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route untuk Authentikasi
//
// Login Route
Route::get("auth/login", "Auth\AuthController@getLogin");
Route::post("auth/login", "Auth\AuthController@postLogin");
Route::get("auth/logout", "Auth\AuthController@getLogout");

//Register Route
Route::get("auth/register", "Auth\AuthController@getRegister");
Route::post("auth/register", "Auth\AuthController@postRegister");


//Route Umum
Route::get('/', 'PagesController@getIndex');
Route::get('tentang-lkp-krisfot-multimedia', 'PagesController@getTentang');
Route::get('info-kursus', 'PagesController@getKursus');
Route::get('kontak', 'PagesController@getKontak');
Route::get('blog', 'BlogsController@getIndex');
Route::get('program-kursus', 'PagesController@getInfo');
Route::get('info-pendaftaran', 'PagesController@getPendaftaran');
Route::get('tata-tertip-peserta', 'PagesController@getTataPeserta');
Route::get('tata-tertip-pendidik', 'PagesController@getTataPendidik');

//Route Tentang Kami
Route::get('tentangkami/sejarah', 'TentangController@getSejarah');
Route::get('tentangkami/visi-misi', 'TentangController@getVisi');
Route::get('tentangkami/struktur-organisasi', 'TentangController@getStruktur');
Route::get('tentangkami/sarana-dan-prasarana', 'TentangController@getSarana');

//Route Dashboard Panel
Route::get('/dashboard', "DashboardController@getIndex");

Route::post("/dashboard/blog", "DashboardController@postSaveBlog");
Route::put("/dashboard/blog/{id_blog}","DashboardController@putUpdateBlog");
Route::delete("/dashboard/blog/{id_blog}","DashboardController@deleteBlog");
Route::get("/dashboard/blog", ['as' => 'blog.show', 'uses'=> "DashboardController@getIndexBlog"]);
Route::get("/dashboard/blog/{id_blog}/edit", "DashboardController@getEditBlog");
Route::get("/dashboard/blog/create", "DashboardController@getTambahBlog");


