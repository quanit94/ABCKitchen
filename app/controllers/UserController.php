<?php  

class UserController extends BaseController {
	protected $_data;
	public function index(){
		$this->_data['data'] = User::where("level","!=",1)->paginate(10);
		return View::make("admin.content.user.index", $this->_data);
	}
	public function add_get(){
		return View::make("admin.content.user.add")->with("titlePage","Add User")->with("titleTable","Thêm thành viên tại nhà hàng");
	}
	public function add_post(){
		$valid = Validator::make(Input::all(),User::$rule_add_user, User::$user_langs);
		if($valid->passes()){
			$data = array(
				"username" => Input::get("username"),
				"email"		=>	Input::get("email"),
				"password"	=>	Hash::make(Input::get("password")),
				"salt"		=>	Input::get("password"),
				"name"		=>	Input::get("name"),
				"phone"		=>	Input::get("phone"),
				"address"	=> 	Input::get("address"),
				"age"		=>	Input::get("age"),
				"gender"	=>	Input::get("gender"),
				"level"		=>	0,
				);
			User::create($data);
			return Redirect::route("manage_user_add_get")->with("flash_success","Chúc mừng bạn đã thêm thành viên thành công");
		}
		return Redirect::route("manage_user_add_get")->withInput(Input::except("password"))->with("flash_error",$valid->errors()->first());
	}
	public function edit_get($id){
		$this->_data['data'] = User::find($id);
		return View::make("admin.content.user.edit", $this->_data)->with("titlePage","Edit User")->with("titleTable","Sửa thành viên tại nhà hàng");
	}
	public function edit_post($id){
		$valid = Validator::make(Input::all(),User::rule_edit_user($id), User::$user_langs);
		if($valid->passes()){
			$data = array(
				"username" => Input::get("username"),
				"email"		=>	Input::get("email"),
				"password"	=>	Hash::make(Input::get("password")),
				"salt"		=>	Input::get("password"),
				"name"		=>	Input::get("name"),
				"phone"		=>	Input::get("phone"),
				"address"	=> 	Input::get("address"),
				"age"		=>	Input::get("age"),
				"gender"	=>	Input::get("gender"),
				"level"		=>	0,
				);
			DB::table("users")->where("id", $id)->update($data);
			return Redirect::route("manage_user")->with("flash_success","Chúc mừng bạn đã sửa thành viên thành công");
		}
		return Redirect::route("manage_user_edit_get",$id)->withInput(Input::except("password"))->with("flash_error",$valid->errors()->first());
	}
	public function delete(){
		if(Input::get("ok")){
			if(Input::get("del")){
				foreach (Input::get("del") as $id => $value) {
					$user = User::find($id);
					$user->delete();
				}				
			}else{
				return Redirect::route('manage_user')->with('flash_error','Hành động bạn đang sử dụng thực sự rất nguy hiểm. Bạn phải lựa chọn thật sự chắc chắn trước khi xác nhận hành động xóa');
			}
		}
		return Redirect::route('manage_user')->with('flash_success','Chúc mừng bạn đã xóa thành công nhân viên');
	}
	public function delete_all(){
		DB::table("users")->where("level","!=",1)->delete();
		return Redirect::route('manage_user')->with('flash_success','Chúc mừng bạn đã xóa thành công nhân viên');
	}
}
// echo "<pre>";
// print_r(Input::all());
// echo "</pre>";