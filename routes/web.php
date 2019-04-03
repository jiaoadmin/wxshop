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
Route::post('cart/dels','CartController@dels');  //删除
Route::post('cart/checknum','CartController@checknum'); //购买数量
Route::post('cart/payment','CartController@payment'); //支付方式
Route::any('cart/paymentshow','CartController@paymentshow'); //支付方式

Route::any('address/address','AddressController@address'); //收货地址
Route::any('address/buyrecord','AddressController@buyrecord'); //潮购记录
Route::post('address/del','AddressController@del'); //点击删除
Route::get('address/edit/{id}','AddressController@edituser'); //点击编辑
Route::any('address/default','AddressController@default'); //点击设置默认
Route::any('address/useradd','AddressController@useradd'); //点击添加
Route::any('address/mywallet','AddressController@mywallet'); //我的钱包

Route::get('alipay/mobilpay','AliPayController@mobilpay'); //手机支付
Route::any('alipay/return','AliPayController@re'); //同步回调
Route::any('alipay/notify','AliPayController@notify'); //异步回调

// Route::prefix('order')->group(function(){
//     Route::post('order','OrderController@order'); //订单详情
// });

Route::post('order/order','OrderController@order'); //



Route::get('wechar/wechar','weCharController@valid');
Route::get('wechar/wechare','weCharController@checkSignature');






