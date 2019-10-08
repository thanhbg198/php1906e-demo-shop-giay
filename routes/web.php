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

//use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("admin/dangnhap",['as'=>'admin_login','uses'=>'PageController@getLogin']);

//Route::post("admin/dangnhap,['as'=>'dangnhap','uses'=>'PageController@postLogin']");



Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::group(["prefix"=>'danh-muc'],function (){
        Route::get("them",['as'=>'themdanhmuc','uses'=>'CategoryController@getAddCate']);

        Route::post("them",['as'=>'themdanhmuc','uses'=>'CategoryController@postAddCate']);

        Route::get("danh-sach",['as'=>'listdanhmuc','uses'=>'CategoryController@getListCate']);
        Route::get("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@getEditCate']);
        Route::post("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@postEditCate']);

        Route::get('xoa/{id}',"CategoryController@getDelCate");
    });
    Route::group(['prefix'=>'don-hang'],function (){

        Route::get('danh-sach','BillController@getListBill');

        Route::get('xoa/{id}','BillController@getDelBill');

        Route::get('chi-tiet/{id}',['as'=>'admin.detail.bill', 'uses'=>'BillController@getDetailBill']);

        Route::get('chi-tiet/xoa/{id}','BillController@getDelDetailBill');
    });
});
