<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("menus", function($table){
			$table->increments("menu_id");
			$table->string("menu_name", 255);
			$table->integer("menu_price");
			$table->string("menu_image", 255);
			$table->text("menu_description");
			$table->date("menu_created_at");
			$table->integer("menu_day");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("menus");
	}

}
