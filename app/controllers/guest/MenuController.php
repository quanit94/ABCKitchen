<?php 

class MenuController extends BaseController {
	public function index(){
		return View::make('guest/content/menu/index');
	}
	
}