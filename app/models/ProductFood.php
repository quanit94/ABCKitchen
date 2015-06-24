<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class ProductFood extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product_foods';
	protected $fillable = array("product_food_name","product_food_price","product_food_description","product_food_date");
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');
	public $timestamps = false;

	public static $product_food_langs = array(
		"product_food_name.required"	=>	"Vui lòng nhập tên món ăn",
		"product_food_price.required"	=>	"Vui lòng nhập giá tiền",
		"product_food_price.integer"	=>	"Giá tiền không hợp lệ",
		"product_food_description.required"=>"Vui lòng nhập mô tả cho món ăn",
		);
	public static $rule_edit_product_food = array(
		"product_food_name"	=>	"required",
		"product_food_price"	=>	"required|integer",
		"product_food_description"		=>	"required",
		);
	public static $rule_add_product_food = array(
		"product_food_name"	=>	"required",
		"product_food_price"	=>	"required|integer",
		"product_food_description"		=>	"required",
		);

}