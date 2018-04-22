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

Route::get('/', function () {
    return view('admin.index');
});
Route::get('table',function(){
	return view('admin.user.list');
});
Route::get('add',function(){
	return view('admin.user.add');
});
Route::get('login',function(){
	return view('admin.login');
});
Route::post('check',function(){
	echo '123';
});
Route::get('trangchu','PagesController@index');
Route::get('category','PagesController@category');
Route::get('timkiem','PagesController@timkiem');
Route::get('chitiet',function(){
	return view('default.pages.chitiet');
});
Route::get('dangki',function(){
		return view('default.pages.dangki');
});
Route::get('dangnhap',function(){
		return view('default.pages.dangnhap');
});
Route::get('giohang',function(){
		return view('default.pages.giohang');
});
Route::get('error',function(){
		return view('default.pages.404');
});
