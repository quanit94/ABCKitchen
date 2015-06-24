<?php 

class MenuController extends BaseController {
	public function index(){
		$this->_data['data'] = Menu::orderBy("menu_id","desc")->paginate(10);
		return View::make("admin.content.menu.index", $this->_data)->with("titlePage","Manage Menu")->with("titleTable","Danh sách thực đơn của nhà hàng");		
	}
	public function add_get(){
		return View::make("admin.content.menu.add")->with("titlePage","Add Menu")->with("titleTable","Thêm thực đơn tại nhà hàng");
	}
	public function add_post(){
		$valid = Validator::make(Input::all(),Menu::$rule_add_menu, Menu::$menu_langs);
		if($valid->passes()){
			$data = Input::all();
			$img = $data['menu_image'];
			$isUpload = $img->move("uploads/menu/images/",$img->getClientOriginalName());
	        if($isUpload){
				$data = array(
					"menu_name" => Input::get("menu_name"),				
					"menu_description"		=>	Input::get("menu_description"),
					"menu_image"	=>	$img->getClientOriginalName(),
					"menu_created_at"		=>	Input::get("menu_created_at"),
					);
				Menu::create($data);
				return Redirect::route("manage_menu_add_get")->with("flash_success","Chúc mừng bạn đã thêm thực đơn thành công");
			}
			return Redirect::route("manage_menu_add_get")->with("flash_success","Không thể upload ảnh");
		}
		return Redirect::route("manage_menu_add_get")->withInput()->with("flash_error",$valid->errors()->first());
	}
	public function edit_get($id){
		$this->_data['data'] = Menu::where("menu_id", $id)->first();
		return View::make("admin.content.menu.edit", $this->_data)->with("titlePage","Edit Menu")->with("titleTable","Sửa thực đơn tại nhà hàng");
	}
	public function edit_post($id){
		$valid = Validator::make(Input::all(),Menu::rule_edit_menu($id), Menu::$menu_langs);
		if($valid->passes()){
			$data = Input::all();
			$img = $data['menu_image'];
			$isUpload = $img->move("uploads/menu/".Input::get('menu_name'),$img->getClientOriginalName());
	        if($isUpload){
				$data = array(
					"menu_name" => Input::get("menu_name"),
					"menu_price"		=>	Input::get("menu_price"),
					"menu_description"		=>	Input::get("menu_description"),
					"menu_image"	=>	$img->getClientOriginalName(),
					"menu_created_at"		=>	Input::get("menu_date"),
					);
				DB::table("menus")->where("menu_id", $id)->update($data);
				return Redirect::route("manage_menu")->with("flash_success","Chúc mừng bạn đã sửa thực đơn thành công");
			}
			return Redirect::route("manage_menu")->with("flash_error","Không thể upload ảnh");
		}
		return Redirect::route("manage_menu_edit_get",$id)->withInput()->with("flash_error",$valid->errors()->first());
	}
	public function delete(){
		if(Input::get("ok")){
			if(Input::get("del")){
				foreach (Input::get("del") as $id => $value) {
					DB::table("menus")->where("menu_id", $id)->delete();
				}				
			}else{
				return Redirect::route('manage_menu')->with('flash_error','Hành động bạn đang sử dụng thực sự rất nguy hiểm. Bạn phải lựa chọn thật sự chắc chắn trước khi xác nhận hành động xóa');
			}
		}
		return Redirect::route('manage_menu')->with('flash_success','Chúc mừng bạn đã xóa thành công thực đơn');
	}
	
	public function delete_all(){
		DB::table("menus")->delete();
		return Redirect::route('manage_menu')->with('flash_success','Chúc mừng bạn đã xóa thành công');
	}

	public function add_food_get($menu_id){
		$menu_name = Menu::where("menu_id",$menu_id)->first();
		$this->_data['foods'] = Food::paginate(10);
		$this->_data['menus'] = DB::table("menus")
					->join("menu_foods","menus.menu_id","=","menu_foods.menu_id")
					->join("foods","menu_foods.food_id","=","foods.food_id")
					->where("menus.menu_id",$menu_id)
					->orderBy("menu_foods.created_at","desc")
					->get();
		return View::make("admin.content.menu.add_food", $this->_data)->with("titlePage","Add Food In Menu")->with("titleTable","Thêm món ăn vào thực đơn: <strong>".$menu_name->menu_name."</strong>")->with("menu_id", $menu_id);	

	}

	public function add_food_post($menu_id){
		if(Input::get("ok")){
			if(Input::get("add")){
				foreach (Input::get("add") as $food_id => $value) {
					$count = DB::table("menu_foods")->where("food_id", $food_id)->where("menu_id",$menu_id)->count();
					if($count == 0)
						DB::table("menu_foods")->insert(array("menu_id"=>$menu_id, "food_id"=>$food_id, "created_at"=>date("Y-m-d H-i-s")));
				}				
			}else{
				return Redirect::route('manage_menu_add_food_get',$menu_id)->with('flash_error','Hãy chắc chắn khi nhấn nút xác nhận!');
			}
		}
		return Redirect::route('manage_menu_add_food_get',$menu_id)->with('flash_success','Chúc mừng bạn đã thêm thành công món ăn vào thực đơn');
	}

	public function delete_food_post($menu_id){
		if(Input::get("ok")){
		//cap nhat gia cua thuc don
			$newprice = Input::get("newprice");
		 	// $data = DB::table("menus")->where("menu_id",$menu_id)->groupBy('menu_id')->sum('menu_price');
				DB::update('update menus set menu_price = ? where menu_id = ?', array($newprice, $menu_id));
			

			// if(Input::get("del")){
			// 	foreach (Input::get("del") as $menu_food_id => $value) {
			// 		DB::table("menu_foods")->where("menu_food_id", $menu_food_id)->delete();
			// 	}				
			// }else{
			// 	return Redirect::route('manage_menu_add_food_get',$menu_id)->with('flash_error','Hành động bạn đang sử dụng thực sự rất nguy hiểm. Bạn phải lựa chọn thật sự chắc chắn trước khi xác nhận hành động xóa');
			// }
		}
		return Redirect::route('manage_menu_add_food_get',$menu_id)->with('flash_success','Thay đổi đã được lưu lại!');	
	}

	public function detail($menu_id){
		$this->_data['menu'] = Menu::where("menu_id", $menu_id)->first();
		$this->_data['foods'] = DB::table("foods")
					->join("menu_foods","foods.food_id","=","menu_foods.food_id")
					->where("menu_foods.menu_id",$menu_id)
					->orderBy("menu_foods.created_at","desc")
					->get();
		return View::make("admin.content.menu.detail", $this->_data)->with("titlePage","Detail Menu")->with("titleTable","Thông tin chi tiết về thực đơn")->with("menu_id", $menu_id);	
	}

	public function detail_delete_food_post($menu_id){
		if(Input::get("ok")){
			if(Input::get("del")){
				foreach (Input::get("del") as $food_id => $value) {
					DB::table("menu_foods")->where("menu_id", $menu_id)->where("food_id", $food_id)->delete();
				}				
			}else{
				return Redirect::route('manage_menu_detail',$menu_id)->with('flash_error','Hành động bạn đang sử dụng thực sự rất nguy hiểm. Bạn phải lựa chọn thật sự chắc chắn trước khi xác nhận hành động xóa');
			}
		}
		return Redirect::route('manage_menu_detail',$menu_id)->with('flash_success','Chúc mừng bạn đã xóa thành công');		
	}
	// cap nhat gia cua thuc don
	public function updateMenuPrice(){
		$newprice = Input::get("newprice");
		$menu_id  = Input::get("menu_id");
		$data = DB::table("menus")->where("menu_id",$menu_id)->sum("menu_price");
		if($newprice != $data){
			DB::table("menus")->where("menu_id",$menu_id)->update(array("menu_price",$newprice));
		}
	}
}