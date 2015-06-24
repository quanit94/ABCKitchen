<?php 

class ProductFoodController extends BaseController {
	public function index(){
		$this->_data['data'] = ProductFood::orderBy("product_food_date","asc")->paginate(10);
		return View::make("admin.content.product_food.index", $this->_data)->with("titlePage","Manage Product Food")->with("titleTable","Danh sách các thực phẩm đã mua của nhà hàng");	
	}
	public function add_get(){
		return View::make("admin.content.product_food.add")->with("titlePage","Add Product Food")->with("titleTable","Thêm thực phẩm tại nhà hàng");
	}
	public function add_post(){
		$valid = Validator::make(Input::all(),ProductFood::$rule_add_product_food, ProductFood::$product_food_langs);
		if($valid->passes()){
			$data = array(
				"product_food_name" => Input::get("product_food_name"),
				"product_food_price"		=>	Input::get("product_food_price"),
				"product_food_description"		=>	Input::get("product_food_description"),
				"product_food_date"		=>	Input::get("product_food_date"),
				);
			ProductFood::create($data);
			return Redirect::route("manage_product_food_add_get")->with("flash_success","Thêm thực phẩm thành công");
		}
		return Redirect::route("manage_product_food_add_get")->withInput()->with("flash_error",$valid->errors()->first());
	}
	public function edit_get($id){
		$this->_data['data'] = ProductFood::where("product_food_id", $id)->first();
		return View::make("admin.content.product_food.edit", $this->_data)->with("titlePage","Edit Product Food")->with("titleTable","Sửa thực phẩm tại nhà hàng");
	}
	public function edit_post($id){
		$valid = Validator::make(Input::all(),ProductFood::$rule_edit_product_food, ProductFood::$product_food_langs);
		if($valid->passes()){
			$data = array(
				"product_food_name" => Input::get("product_food_name"),
				"product_food_price"		=>	Input::get("product_food_price"),
				"product_food_description"		=>	Input::get("product_food_description"),
				"product_food_date"		=>	Input::get("product_food_date"),
				);
			DB::table("product_foods")->where("product_food_id", $id)->update($data);
			return Redirect::route("manage_product_food")->with("flash_success","Sửa thực phẩm thành công");
		}
		return Redirect::route("manage_product_food_edit_get", $id)->withInput()->with("flash_error",$valid->errors()->first());
	}

	public function delete(){
		if(Input::get("ok")){
			if(Input::get("del")){
				foreach (Input::get("del") as $id => $value) {
					DB::table("product_foods")->where("product_food_id", $id)->delete();
				}				
			}else{
				return Redirect::route('manage_product_food')->with('flash_error','Cân nhắc trước khi bấm nút');
			}
		}
		return Redirect::route('manage_product_food')->with('flash_success','Chúc mừng bạn đã xóa thành công thực phẩm');
	}
	public function delete_all(){
		DB::table("product_foods")->delete();
		return Redirect::route('manage_product_food')->with('flash_success','Chúc mừng bạn đã xóa thành công');
	}
}