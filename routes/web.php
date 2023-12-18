<?php

use Illuminate\Support\Facades\Route;

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

// frontend/trang chủ
Route::get('/','App\Http\Controllers\TrangchuController@trangchu');
Route::get('/trangchunguoidung','App\Http\Controllers\TrangchuController@trangchunguoidung');
Route::get('/xemthongtinphong/{id}','App\Http\Controllers\TrangchuController@xemthongtinphong');

// frontend/trang dăng nhập, đáng ký
Route::get('/dangnhap','App\Http\Controllers\DangnhapController@dangnhap');
Route::get('/dangky','App\Http\Controllers\DangnhapController@dangky');

Route::post('/luuthongtin','App\Http\Controllers\DangnhapController@luuthongtin');
Route::post('/nguoidungdangnhap','App\Http\Controllers\DangnhapController@nguoidungdangnhap');



//backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/trangchuadmin','App\Http\Controllers\AdminController@trangchuadmin');
Route::post('/admindangnhap','App\Http\Controllers\AdminController@admindangnhap');
Route::get('/lietkekhachhang','App\Http\Controllers\AdminController@lietkekhachhang');
Route::get('/xoakhachhang/{id}','App\Http\Controllers\AdminController@xoakhachhang');
//phòng
Route::get('/themphong','App\Http\Controllers\PhongController@themphong');
Route::get('/lietkephong','App\Http\Controllers\PhongController@lietkephong');
Route::get('/suaphong/{id}','App\Http\Controllers\PhongController@suaphong');
Route::get('/xoaphong/{id}','App\Http\Controllers\PhongController@xoaphong');
Route::post('/luuphong','App\Http\Controllers\PhongController@luuphong');
Route::post('/chinhsua/{id}','App\Http\Controllers\PhongController@chinhsua');


//giỏ hàng
Route::get('/giohang','App\Http\Controllers\GiohangController@giohang');
Route::post('/luugiohang','App\Http\Controllers\GiohangController@luugiohang');
Route::get('/xoagiohang/{rowId}','App\Http\Controllers\GiohangController@xoagiohang');
Route::post('/updateqty','App\Http\Controllers\GiohangController@updateqty');

//Mã giảm giá

Route::post('/ktmagiamgia','App\Http\Controllers\MaController@ktmagiamgia');
Route::get('/themma','App\Http\Controllers\MaController@themma');
Route::get('/lietkema','App\Http\Controllers\MaController@lietkema');
Route::post('/luuma','App\Http\Controllers\MaController@luuma');


//Đặt phòng
