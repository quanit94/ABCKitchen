<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Order extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';
	protected $fillable = array("order_id","user_id","menu_id","order_date");
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');
	public $timestamps = false;
	public function user(){
		return $this->belongsTo("User","user_id","id");
	}
	public function menu(){
		return $this->belongsTo("Menu","menu_id","menu_id");
	}
	public static $order_langs = array(
		"username.required"	=>	"Vui lòng nhập tên đăng nhập của người dùng",
		"menu_name.required"	=>	"Vui lòng nhập tên thực đơn mà người dùng muốn",
		"order_date.required"	=>	"Vui lòng nhập thời gian mà người đó muốn ăn",
		);
	public static $rule_edit_order = array(
		"username"	=>	"required",
		"menu_name"	=>	"required",
		"order_date"		=>	"required",
		);
	public static $rule_add_order = array(
		"username"	=>	"required",
		"menu_name"	=>	"required",
		"order_date"		=>	"required",
		);

}