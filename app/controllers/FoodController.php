<?php 

class FoodController extends BaseController {
	public function index(){
		$this->_data['data'] = Food::orderBy("food_id","desc")->paginate(10);
		return View::make("admin.content.food.index", $this->_data)->with("titlePage","Manage Food")->with("titleTable","Danh sách các món ăn của nhà hàng");		
	}
	public function add_get(){
		return View::make("admin.content.food.add")->with("titlePage","Add Food")->with("titleTable","Thêm món ăn tại nhà hàng");
	}
	public function add_post(){
		$valid = Validator::make(Input::all(),Food::$rule_add_food, Food::$food_langs);
		if($valid->passes()){
			$data = Input::all();
			$img = $data['food_image'];
			$isUpload = $img->move("uploads/food/images/",$img->getClientOriginalName());
	        if($isUpload){
				$data = array(
					"food_name" => Input::get("food_name"),
					"food_price"		=>	Input::get("food_price"),
					"food_description"		=>	Input::get("food_description"),
					"food_image"	=>	$img->getClientOriginalName(),
					"food_created_at"		=>	date("Y-m-d"),
					);
				Food::create($data);
				return Redirect::route("manage_food_add_get")->with("flash_success","Chúc mừng bạn đã thêm món ăn thành công");
			}
			return Redirect::route("manage_food_add_get")->with("flash_success","Không thể upload ảnh");
		}
		return Redirect::route("manage_food_add_get")->withInput()->with("flash_error",$valid->errors()->first());
	}
	public function edit_get($id){
		$this->_data['data'] = Food::where("food_id", $id)->first();
		return View::make("admin.content.food.edit", $this->_data)->with("titlePage","Edit Food")->with("titleTable","Sửa món ăn tại nhà hàng");
	}
	public function edit_post($id){
		$valid = Validator::make(Input::all(),Food::rule_edit_food($id), Food::$food_langs);
		if($valid->passes()){
			$data = Input::all();
			$img = $data['food_image'];
			$isUpload = $img->move("uploads/food/");
	        if($isUpload){
				$data = array(
					"food_name" => Input::get("food_name"),
					"food_price"		=>	Input::get("food_price"),
					"food_description"		=>	Input::get("food_description"),
					"food_image"	=>	$img->getClientOriginalName(),
					"food_created_at"		=>	date("Y-m-d"),
					);
				DB::table("foods")->where("food_id", $id)->update($data);
				return Redirect::route("manage_food")->with("flash_success","Chúc mừng bạn đã sửa món ăn thành công");
			}
			return Redirect::route("manage_food")->with("flash_error","Không thể upload ảnh");
			
		}
		return Redirect::route("manage_food_edit_get",$id)->withInput()->with("flash_error",$valid->errors()->first());
	}

	public function delete(){
		if(Input::get("ok")){
			if(Input::get("del")){
				foreach (Input::get("del") as $id => $value) {
					DB::table("foods")->where("food_id", $id)->delete();
				}				
			}else{
				return Redirect::route('manage_food')->with('flash_error','Hành động bạn đang sử dụng thực sự rất nguy hiểm. Bạn phải lựa chọn thật sự chắc chắn trước khi xác nhận hành động xóa');
			}
		}
		return Redirect::route('manage_food')->with('flash_success','Chúc mừng bạn đã xóa thành công món ăn');
	}
	public function delete_all(){
		DB::table("foods")->delete();
		return Redirect::route('manage_food')->with('flash_success','Chúc mừng bạn đã xóa thành công');
	}
}