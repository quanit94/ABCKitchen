<?php 

class AdminController extends BaseController{
	public function index(){
		return View::make("admin.content.main.index")->with("titlePage","Dashboard")->with("titleTable","Dashboard");
	}
}