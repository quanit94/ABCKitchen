<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("orders", function($table){
			$table->increments("order_id");
			$table->integer("user_id")->unsigned()->default(0);
			$table->integer("menu_id")->unsigned()->default(0);
			$table->date("order_date");

			$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
			$table->foreign("menu_id")->references("menu_id")->on("menus")->onDelete("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("orders");
	}

}
