<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//设置登录路由在中间件外面,必须先登录再进入主页,
Route::get('admin/login','admin\LoginController@index');

//提交账号密码后登陆方法
Route::post('admin/login','admin\LoginController@dologin');

//验证码
Route::get('admin/captch/{tmp}','admin\LoginController@captch');

//设置前缀和中间件
Route::group(['prefix'=>'admin','middleware'=>'login'],function(){

	//设置退出登录方法
	Route::get('logout','admin\LoginController@logout');

	//设置主页方法,登陆后直接跳转到主页
	Route::get('index','admin\IndexController@index');

	//设置购物车信息处理
	Route::get('car','admin\CarController@index');

	//设置订单信息处理
	Route::resource('indent','admin\IndentController');

	//设置友情链接
	Route::resource('link','admin\LinkController');

	//设置友情链接图片修改
	Route::get('link/img/{id}','admin\LinkController@changeImg');
	Route::post('link/img/{id}','admin\LinkController@change');

	//设置首页推荐
	Route::resource('recommend','admin\RecommendController');

	//设置用户评价的路由
	Route::get('comment','admin\CommentController@index');

	//设置商品类型的路由
	Route::resource('shoptype','admin\ShoptypeController');

	//设置商品信息的路由
	Route::resource('shopinfo','admin\ShopinfoController');

	//设置商品详细信息的路由
	Route::resource('show','admin\ShowController');

	//设置超级用户信息路由
	Route::resource('users','admin\SuperuserController');

	//设置普通用户信息路由
	Route::resource('userss','admin\UsersSonController');

	//设置用户基本信息路由
	Route::resource('basis','admin\BasisController');

	//修改配送状态
	Route::get('post/{id}','admin\PostController@index');

});

//商品列表路由
Route::resource('home/productlist','home\ProductlistController');

//商品详细信息的路由
Route::resource('/home/productinfo','home\ProductinfoController');

//商品评论路由
Route::post('/home/comment/{id}','home\ProductinfoController@comment');

//购物车添加路由
Route::get('/home/carinfo/{id}','home\CarinfoController@index');

//添加购物信息
Route::post('/home/buy/{id}','home\BuyController@index');

//设置前台登陆页面路由
Route::get('home/login','home\LoginController@index');

//提交账号密码后登陆方法
Route::post('home/login','home\LoginController@dologin');

//验证码
Route::get('home/captch/{tmp}','home\LoginController@captch');

//设置退出登录方法
Route::get('home/logout','home\LoginController@logout');

//设置注册页面路由
Route::resource('home/register','home\RegisterController');

//设置前台主页路由
Route::resource('home/zhuye','home\IndexController');

//设置前台购物车的路由
Route::resource('home/car','home\FavoritesController');

//设置个人订单的路由
Route::resource('home/order','home\OrdersController');

//设置订单信息的路由
Route::resource('home/indents','home\IndentsController');
	
//添加订单信息(去结算)
Route::post('/home/jiesuan','home\JiesuanController@index');

//设置支付页面路由
Route::resource('indent','home\IndentController');

Route::post('indent/{id}','home\IndentEditController@edit');

//添加订单信息
Route::post('home/indentadd','home\IndentAddController@add');
