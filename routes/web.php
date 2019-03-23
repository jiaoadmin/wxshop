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



Route::any('/','IndexController@Index'); //首页

Route::any('index/Allshops','IndexController@Allshops'); //全部商品
Route::any('index/category','IndexController@category'); //分类
Route::get('index/Shopcart','CartController@Shopcart')->middleware('logs'); //购物车
Route::get('index/Userpage','IndexController@Userpage'); //个人中心
Route::get('index/Willshare','IndexController@Willshare'); //晒单
Route::get('index/shopcontent/{id}','IndexController@shopcontent'); //商品详情页

Route::any('login/login','LoginController@login'); //登录
Route::post('login/logindo','LoginController@logindo'); //登录验证
Route::any('login/register','LoginController@register'); //注册
Route::post('login/registerdo','LoginController@registerdo'); //注册验证
Route::any('login/updpwd','LoginController@updpwd'); //忘记密码

Route::any('verify/create','CaptchaController@create'); //生成验证码的路由
Route::post('login/code','LoginController@code'); //注册验证码

Route::post('cart/cart','CartController@cart'); //加入购物车
Route::post('cart/del','CartController@del');  //删除
Route::post('cart/checknum','CartController@checknum'); //购买数量




