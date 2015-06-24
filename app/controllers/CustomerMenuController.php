<?php 

class CustomerMenuController extends BaseController{

	public function index(){
		$data['data'] = Menu::orderBy('menu_id','desc')->paginate(9);
		return View::make('guest/content/customerMenu/index', $data)->with("titleTable","Thực đơn tuần")->with("flash_success","Đăng ký ăn thành công! Xem lịch ăn của bạn!");
	}
	public function menuDate($date){

		$data['data'] = Menu::where("menu_created_at",$date)->orderBy('menu_id','desc')->paginate(9);
		return View::make("guest.content.customerMenu.menu-date", $data)->with("titleTable",$date);
	}

	public function order($menu_id){
		if(Auth::check()){
				$day = DB::table("menus")->where("menu_id", $menu_id)->first();
				$date = $day->menu_created_at;
				$date = new DateTime($date);
				$data = array(
					"user_id" => Auth::user()->id,
					"menu_id" => $menu_id,
					"order_date" => $date->format('Y-m-d'),
					);
				DB::table("orders")->insert($data);
					return Redirect::route("customerMenu")->with("flash_success","Đăng ký ăn thành công!");
		}
			return Redirect::route("customerMenu")->with("flash_warning","Đăng nhập để đăng ký ăn!");
	}

	public function customerMenuDetails($menu_id){
		$menu_name = Menu::where("menu_id", $menu_id)->first();
		$data['food'] = DB::table("foods")
			->join("menu_foods","menu_foods.food_id","=","foods.food_id")
			->join("menus","menus.menu_id","=","menu_foods.menu_id")
			->where("menus.menu_id",$menu_id)->get();
		return View::make("guest.content.customerMenu.menudetails",$data)->with("titleTable",$menu_name->menu_name)->with("menu_id", $menu_id)->with("menu_date",$menu_name->menu_created_at);
	}

	
}