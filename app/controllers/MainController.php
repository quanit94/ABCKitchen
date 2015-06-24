<?php 
class MainController extends BaseController{
	public function index(){
		return View::make("guest/content/index");
	}
	public function login_post(){
		$data =array(
			"username" => Input::get("username"),
			"password" => Input::get("password"),
			);
		if(Auth::attempt($data)){
			return Redirect::route("main");
		}else{
			echo "no";
			return Redirect::route("main");
		}
	}
	public function logout(){
		if(Auth::check()){
			Auth::logout();
			return Redirect::route("main");
		}
		echo "ban chua dang nhap";
	}
}