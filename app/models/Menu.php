<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Menu extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'menus';
	protected $fillable = array("menu_name","menu_price","menu_image","menu_description","menu_created_at");
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');
	public $timestamps = false;

	public function order(){
		return $this->hasMany("Order","menu_id");
	}
	public function food(){
		return $this->belongsToMany("Food","menu_foods","menu_id","food_id")->withTimestamps();
	}

	public static $menu_langs = array(
		"menu_name.required"	=>	"Vui lòng nhập tên món ăn",
		"menu_name.unique"	=>	"Tên món ăn đã tồn tại",
		// "menu_price.required"	=>	"Vui lòng nhập giá tiền",
		// "menu_price.integer"	=>	"Giá tiền không hợp lệ",
		"menu_image.required"		=>	"Vui lòng nhập ảnh món ăn",
		"menu_image.image"		=>	"Ảnh món ăn không hợp lệ",
		"menu_image.max"		=>	"Ảnh có dung lượng tối đa là :max KB",
		"menu_description.required"=>"Vui lòng nhập mô tả cho món ăn",
		);
	public static function rule_edit_menu($id){
		$data = array(
		"menu_name"	=>	"required|unique:menus,menu_name,".$id.",menu_id",
		"menu_price"	=>	"required|integer",
		"menu_image"		=>	"required|image|max:1000",
		"menu_description"		=>	"required",
		);
		return $data;
	}
	public static $rule_add_menu = array(
		"menu_name"	=>	"required|unique:menus,menu_name",
		// "menu_price"	=>	"required|integer",
		"menu_image"		=>	"required|image|max:1000",
		"menu_description"		=>	"required",
		);

	public static function checkCurrentMenu($inputDate){
		$date = new DateTime();
		if($date->format('Y-m-d') > $inputDate){
			return false;
		}
		return true;
	}
	

}