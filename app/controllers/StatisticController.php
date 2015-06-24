<?php 

class StatisticController extends BaseController{
	public function register(){
		$today = new DateTime("+1 days");
		$data['data'] = DB::table("orders")
			->select(DB::raw('count(*) as order_total, menus.menu_name, orders.order_date'))
			->join("menus","menus.menu_id","=","orders.menu_id")
			->where("orders.order_date","=",$today->format("Y-m-d"))
			->orderBy("menus.menu_name", "desc")
			->groupBy("menus.menu_name")->get();
			
		return View::make("admin.content.statistics.register",$data)->with("titlePage","Thống kê đăng ký ăn");
	}

	public function buy_product(){
		$today = new DateTime();
		$day   = new DateTime();
		$day->setDate($today->format("Y"), $today->format("m"), 1);
		$sum  = DB::table("product_foods")->where("product_food_date",">",$day->format("Y-m-d"))->sum("product_food_price");
		$data['data'] = DB::table("product_foods")
			->where("product_food_date",">",$day->format("Y-m-d"))
			->orderBy("product_food_id", "desc")->paginate(10);
		return View::make("admin.content.statistics.buy_product",$data)->with("titlePage","Thống kê mua bán thực phẩm")->with("total", $sum);
	}
}
