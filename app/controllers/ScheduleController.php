<?php 

class ScheduleController extends BaseController{
	public function index(){
		if(Auth::check()){
				$today = new DateTime();
				$day = new DateTime();
				$day->setDate($today->format("Y"), $today->format("m"), 1);

				$data['registered'] = DB::table("orders")
					->join("menus","menus.menu_id","=","orders.menu_id")
					->join("users","users.id","=","orders.user_id")
					->select("orders.order_id","menus.menu_name","menus.menu_price","users.name","orders.order_date")
					->where("orders.order_date",">",$today->format("Y-m-d"))
					->where("orders.user_id","=",Auth::user()->id)
					->paginate(10);
				

				$data['eated'] = DB::table("orders")
					->join("menus","menus.menu_id","=","orders.menu_id")
					->join("users","users.id","=","orders.user_id")
					->select("orders.order_id","menus.menu_name","menus.menu_price","users.name","orders.order_date")
					->where("orders.user_id","=",Auth::user()->id)
					->where("orders.order_date","<",$today->format("Y-m-d"))
					->where("orders.order_date",">",$day->format("Y-m-d"))
					->paginate(10);
			return View::make("guest.content.Schedule.index", $data);
		}
			return View::make("guest.content.Schedule.index");
	}
	public function deleteMenu(){
		if(Input::get("ok")){
			if(Input::get("del")){
				foreach (Input::get("del") as $id => $value) {
					DB::table("orders")->where("order_id", $id)->delete();
				}				
			}else{
				return Redirect::route('schedule')->with('flash_error','Cân nhắc trước khi bấm nút!');
			}
		}
		return Redirect::route('schedule')->with('flash_success','Chúc mừng bạn đã xóa thành công thực đơn');
	}

}

