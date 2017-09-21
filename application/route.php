<?php
use think\Route;
//后台路由
Route::group('admin',function (){
    Route::rule('login','admin/login/index','get');
    Route::rule('login','admin/login/login','post');
    Route::rule('index','admin/index/index','get');
    Route::resource('administrator','admin/administrator');
    Route::resource('category','admin/category');
    Route::resource('banner','admin/banner');
    Route::resource('link','admin/link');
    Route::resource('module','admin/module');
    Route::resource('information','admin/information');
});


//前台路由
//资讯信息指向
Route::get('information/:id','index/information/information');
Route::get('information','index/information/index');
Route::rule('register','index/login/register','GET|POST');
Route::rule('login','index/login/index','GET|POST');
Route::get('check','index/login/check');
Route::get('logout','index/common/logout');

//测试控制器
Route::get('test','index/test/index');