<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Food extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'foods';
	protected $fillable = array("food_name","food_price","food_image","food_description","food_created_at");
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');
	public $timestamps = false;
	public function menu(){
		return $this->belongsToMany("Menu","menu_foods","food_id","menu_id")->withTimestamps();
	}

	public static $food_langs = array(
		"food_name.required"	=>	"Vui lòng nhập tên món ăn",
		"food_name.unique"		=>	"Tên món ăn đã tồn tại",
		"food_price.required"	=>	"Vui lòng nhập giá tiền",
		"food_price.integer"	=>	"Giá tiền không hợp lệ",
		"food_image.required"	=>	"Vui lòng chọn ảnh món ăn",
		"food_image.image"		=>	"Ảnh món ăn không hợp lệ",
		"food_image.max"		=>	"Ảnh có dung lượng tối đa là :max KB",
		"food_description.required"=>"Vui lòng nhập mô tả cho món ăn",
		);
	public static function rule_edit_food($id){
		$data = array(
		"food_name"	=>	"required|unique:foods,food_name,".$id.",food_id",
		"food_price"	=>	"required|integer",
		"food_image"		=>	"required|image|max:1000",
		"food_description"		=>	"required",
		);
		return $data;
	}
	public static $rule_add_food = array(
		"food_name"	=>	"required|unique:foods,food_name",
		"food_price"	=>	"required|integer",
		"food_image"		=>	"required|image|max:1000",
		"food_description"		=>	"required",
		);

}