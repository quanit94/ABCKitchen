<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $fillable = array("username","password","email","salt","name","phone","gender","age","address","level");
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	public $timestamps = false;

	public function order(){
		return $this->hasMany("Order","user_id");
	}

	public static $user_langs = array(
		"username.required"	=>	"Vui lòng nhập tên đăng nhập của thành viên",
		"username.unique"	=>	"Tên đăng nhập đã tồn tại",
		"password.required"	=>	"Vui lòng nhập mật khẩu của thành viên",
		"email.required"	=>	"Vui lòng nhập địa chỉ email của thành viên",
		"email.unique"		=>	"Địa chỉ email này đã tồn tại",
		"name.required"		=>	"Vui lòng nhập tên đầy đủ của thành viên",
		"age.required"		=>	"Vui lòng nhập tên của thành viên",
		"age.integer"		=>	"Tuổi của thành viên phải là dạng số nguyên",
		"gender.required"	=>	"Chọn giới tính cho thành viên",
		"phone.required"	=>	"Vui lòng nhập sô điện thoại của thành viên",
		"phone.digits_between"	=>	"Số điện thoại nằm trong khoảng từ :min - :max ký tự số nguyên",
		"address.required"	=>	"Vui lòng nhập địa chỉ cho thành viên",
		);
	public static function rule_edit_user($id){
		$data = array(
		"username"	=>	"required|unique:users,username,".$id,
		"password"	=>	"required",
		"email"		=>	"required|unique:users,email,".$id,
		"name"		=>	"required",
		"age"		=>	"required|integer",
		"gender"	=>	"required",
		"phone"		=>	"required|digits_between:6,10",
		"address"	=>	"required",
		);
		return $data;
	}
	public static $rule_add_user = array(
		"username"	=>	"required|unique:users,username",
		"password"	=>	"required",
		"email"		=>	"required|unique:users,email",
		"name"		=>	"required",
		"age"		=>	"required|integer",
		"gender"	=>	"required",
		"phone"		=>	"required|digits_between:6,10",
		"address"	=>	"required",
		);

}
