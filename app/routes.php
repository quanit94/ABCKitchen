<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("test", function(){
	echo Hash::make("12345");
});
Route::get('/',array("as"=>"main","uses"=>"MainController@index"));
Route::get("/trangchu", array('as' => "home","uses" => "MainController@index"));
Route::post("/login", array("as"=>"login_post","uses"=>"MainController@login_post"));
Route::get("logout", array("as"=>"logout","uses"=>"MainController@logout"));
Route::get("/customer/{menu_id}", array('as'=> "customerOrder", 'uses'=> "CustomerMenuController@order"));



Route::group(array("prefix"=>"manage", "before"=>"guest"), function(){
	Route::get("/dashboard", array("as"=>"dashboard","uses"=>"AdminController@index"));
/*----------------------Quản lý người dùng---------------------------------------------------------------*/
	Route::get("/user", array("as"=>"manage_user","uses"=>"UserController@index"));
	Route::get("/user/add", array("as"=>"manage_user_add_get","uses"=>"UserController@add_get"));
	Route::post("/user/add", array("as"=>"manage_user_add_post","uses"=>"UserController@add_post"));
	Route::get("/user/edit/{id}", array("as"=>"manage_user_edit_get","uses"=>"UserController@edit_get"))->where(array('id'=>'[0-9]+'));
	Route::post("/user/edit/{id}", array("as"=>"manage_user_edit_post","uses"=>"UserController@edit_post"))->where(array('id'=>'[0-9]+'));
	Route::post("/user/delete", array("as"=>"manage_user_delete","uses"=>"UserController@delete"));
	Route::get("/user/delete/all", array("as"=>"manage_user_delete_all","uses"=>"UserController@delete_all"));
/*----------------------------------Quản lý thực đơn nhà ăn------------------------------------------------------------------*/
	Route::get("/menu", array("as"=>"manage_menu","uses"=>"MenuController@index"));
	Route::get("/menu/add", array("as"=>"manage_menu_add_get","uses"=>"MenuController@add_get"));
	Route::post("/menu/add", array("as"=>"manage_menu_add_post","uses"=>"MenuController@add_post"));
	Route::get("/menu/edit/{id}", array("as"=>"manage_menu_edit_get","uses"=>"MenuController@edit_get"))->where(array('id'=>'[0-9]+'));
	Route::post("/menu/edit/{id}", array("as"=>"manage_menu_edit_post","uses"=>"MenuController@edit_post"))->where(array('id'=>'[0-9]+'));
	Route::post("/menu/delete", array("as"=>"manage_menu_delete","uses"=>"MenuController@delete"));
	Route::get("/menu/delete/all", array("as"=>"manage_menu_delete_all","uses"=>"MenuController@delete_all"));

	Route::get("/menu/detail/{id}", array("as"=>"manage_menu_detail","uses"=>"MenuController@detail"))->where(array('id'=>'[0-9]+'));
	Route::get("/menu/add/food/{id}", array("as"=>"manage_menu_add_food_get","uses"=>"MenuController@add_food_get"))->where(array('id'=>'[0-9]+'));
	Route::post("/menu/add/food/{menu_id}", array("as"=>"manage_menu_add_food_post","uses"=>"MenuController@add_food_post"))->where(array('menu_id'=>'[0-9]+'));
	Route::post("/menu/delete/food/{menu_id}", array("as"=>"manage_menu_delete_food_post","uses"=>"MenuController@delete_food_post"))->where(array('menu_id'=>'[0-9]+'));
	Route::post("/menu/detail/delete/food/{menu_id}", array("as"=>"manage_menu_detail_delete_food_delete","uses"=>"MenuController@detail_delete_food_post"))->where(array('menu_id'=>'[0-9]+'));
/*-------------------------------------Quản lý mua bán thực phẩm--------------------------------------------------*/
	Route::get("/product_food", array("as"=>"manage_product_food","uses"=>"ProductFoodController@index"));
	Route::get("/product_food/add", array("as"=>"manage_product_food_add_get","uses"=>"ProductFoodController@add_get"));
	Route::post("/product_food/add", array("as"=>"manage_product_food_add_post","uses"=>"ProductFoodController@add_post"));
	Route::get("/product_food/edit/{id}", array("as"=>"manage_product_food_edit_get","uses"=>"ProductFoodController@edit_get"))->where(array('id'=>'[0-9]+'));
	Route::post("/product_food/edit/{id}", array("as"=>"manage_product_food_edit_post","uses"=>"ProductFoodController@edit_post"))->where(array('id'=>'[0-9]+'));
	Route::post("/product_food/delete", array("as"=>"manage_product_food_delete","uses"=>"ProductFoodController@delete"));
	Route::get("/product_food/delete/all", array("as"=>"manage_product_food_delete_all","uses"=>"ProductFoodController@delete_all"));
/*--------------------------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------Quản lý món ăn--------------------------------------------------------*/
	Route::get("/food", array("as"=>"manage_food","uses"=>"FoodController@index"));
	Route::get("/food/add", array("as"=>"manage_food_add_get","uses"=>"FoodController@add_get"));
	Route::post("/food/add", array("as"=>"manage_food_add_post","uses"=>"FoodController@add_post"));
	Route::get("/food/edit/{id}", array("as"=>"manage_food_edit_get","uses"=>"FoodController@edit_get"))->where(array('id'=>'[0-9]+'));
	Route::post("/food/edit/{id}", array("as"=>"manage_food_edit_post","uses"=>"FoodController@edit_post"))->where(array('id'=>'[0-9]+'));
	Route::post("/food/delete", array("as"=>"manage_food_delete","uses"=>"FoodController@delete"));
	Route::get("/food/delete/all", array("as"=>"manage_food_delete_all","uses"=>"FoodController@delete_all"));
/*----------------------------------Quản lý đăng ký ăn --------------------------------------------------------*/
	Route::get("/order", array("as"=>"manage_order","uses"=>"OrderController@index"));
	Route::get("/order/add", array("as"=>"manage_order_add_get","uses"=>"OrderController@add_get"));
	Route::post("/order/add", array("as"=>"manage_order_add_post","uses"=>"OrderController@add_post"));
	Route::get("/order/edit/{id}", array("as"=>"manage_order_edit_get","uses"=>"OrderController@edit_get"))->where(array('id'=>'[0-9]+'));
	Route::post("/order/edit/{id}", array("as"=>"manage_order_edit_post","uses"=>"OrderController@edit_post"))->where(array('id'=>'[0-9]+'));
	Route::post("/order/confirm", array("as"=>"manage_order_confirm","uses"=>"OrderController@confirm"));
	Route::get("/order/delete/all", array("as"=>"manage_order_delete_all","uses"=>"OrderController@delete_all"));
/*--------------------------------------------------------------------------------------------------------------------------------------*/
	
/*--------------------------------------------------------------------------------------------------------------------------------------*/
});
/*--------------------------------------------------------------------------------------------------------------------------------------*/
	// Menu của nhà ăn
	Route::get("/customerMenu", array('as' => "customerMenu", 'uses' => "CustomerMenuController@index"));
	Route::get("/customer/menu/{date}", array("as"=>"menu_date","uses"=>"CustomerMenuController@menuDate"));
	Route::get("/customerMenuDetails/{menu_id}", array("as"=>"customerMenuDetails", "uses"=>"CustomerMenuController@customerMenuDetails"));
	//lịch ăn của nhân viên
	Route::get("/schedule",  array('as' => "schedule", 'uses' => "ScheduleController@index"  ));
	Route::post("/customer/deleteMenu", array('as'=> "customerDeleteMenu", 'uses'=> "ScheduleController@deleteMenu"));
	//Thống kê
	//Thống kê đăng ký ăn
	Route::get("/statistics/statistic_register", array('as'=> "statistic_register",'uses'=>"StatisticController@register"));
	// Thống kê mua bán thực phẩm
	Route::get("/statistics/statistic_buy_product", array('as'=> "statistic_buy_product", "uses"=>"StatisticController@buy_product"));
	// Liên hệ
	Route::get("/contact", array("as"=>"contact", "uses"=>"ContactController@index"));
	
	
/*--------------------------------------------------------------------------------------------------------------------------------------*/
	


