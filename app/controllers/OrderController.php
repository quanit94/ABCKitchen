<?php 

class OrderController extends BaseController {
	public function index(){
		$this->_data['data']  = Order::with("menu","user")->where("status",0)->orderBy("order_date","desc")->paginate(10);
		$this->_data['eated'] = Order::with("menu","user")->where("status",1)->orderBy("order_date","desc")->paginate(10);
		return View::make("admin.content.order.index", $this->_data)->with("titleTable","Các đơn đăng ký ăn")->with("titleTable2","Các đơn đăng ký đã đến ăn");		


	}
	public function add_get(){
		return View::make("admin.content.order.add")->with("titlePage","Add Order")->with("titleTable","Thêm Yêu cầu ăn uống tại nhà hàng");
	}
	public function add_post(){
		$valid = Validator::make(Input::all(),Order::$rule_add_order, Order::$order_langs);
		if($valid->passes()){
			$user = User::where("username",Input::get("username"))->first();
			if(count($user) == 0){
				return Redirect::route("manage_order_add_get")->withInput()->with("flash_error","Người dùng có tên đăng nhập ".Input::get("username")." là không tồn tại");
			}
			$menu = Menu::where("menu_name",Input::get("menu_name"))->first();
			if(count($menu) == 0){
				return Redirect::route("manage_order_add_get")->withInput()->with("flash_error","Thực đơn có tên ".Input::get("menu_name")." là không tồn tại");
			}
			$check = Menu::checkCurrentMenu(Input::get("order_date"));
			if($check == false){
				return Redirect::route("manage_order_add_get")->withInput()->with("flash_error","Bạn chỉ được đăng ký ăn trong 7 ngày tới!");
			}
			$data = array(
				"user_id" => $user->id,
				"menu_id"		=>	$menu->menu_id,
				"order_date"		=>	Input::get("order_date"),
				);
			Order::create($data);
			return Redirect::route("manage_order_add_get")->with("flash_success","Chúc mừng bạn đã yêu cầu thực đơn thành công");
		}
		return Redirect::route("manage_order_add_get")->withInput()->with("flash_error",$valid->errors()->first());
	}
	public function edit_get($id){
		$this->_data['data'] = Order::with("user","menu")->where("order_id", $id)->first();
		return View::make("admin.content.order.edit", $this->_data)->with("titlePage","Edit Order")->with("titleTable","Sửa yêu cầu tại nhà hàng");
	}
	public function edit_post($id){
		$valid = Validator::make(Input::all(),Order::$rule_edit_order, Order::$order_langs);
		if($valid->passes()){
			$user = User::where("username",Input::get("username"))->first();
			if(count($user) == 0){
				return Redirect::route("manage_order_edit_get", $id)->withInput()->with("flash_error","Người dùng có tên đăng nhập ".Input::get("username")." là không tồn tại");
			}
			$menu = Menu::where("menu_name",Input::get("menu_name"))->first();
			if(count($menu) == 0){
				return Redirect::route("manage_order_edit_get", $id)->withInput()->with("flash_error","Thực đơn có tên ".Input::get("menu_name")." là không tồn tại");
			}
			$data = array(
				"user_id" => $user->id,
				"menu_id"		=>	$menu->menu_id,
				"order_date"		=>	Input::get("order_date"),
				);
			DB::table("orders")->where("order_id",$id)->update($data);
			return Redirect::route("manage_order")->with("flash_success","Chúc mừng bạn đã sửa yêu cầu thực đơn thành công");
		}
		return Redirect::route("manage_order_edit_get", $id)->withInput()->with("flash_error",$valid->errors()->first());
	}

	public function confirm(){
		if(Input::get("ok")){
			if(Input::get("del")){
				foreach (Input::get("del") as $id => $value) {
					DB::table("orders")->where("order_id", $id)->update(array("status"=>1));
				}				
			}else{
				return Redirect::route('manage_order')->with('flash_error','Cân nhắc trước khi bấm nút');
			}
		}
		return Redirect::route('manage_order')->with('flash_success','Thay đổi đã được lưu lại');
	}
	public function delete_all(){
		DB::table("orders")->delete();
		return Redirect::route('manage_order')->with('flash_success','Chúc mừng bạn đã xóa thành công');
	}
}