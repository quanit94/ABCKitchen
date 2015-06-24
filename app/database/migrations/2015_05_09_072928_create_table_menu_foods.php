<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenuFoods extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("menu_foods", function($table){
			$table->increments("menu_food_id");
			$table->integer("menu_id")->unsigned()->default(0);
			$table->integer("food_id")->unsigned()->default(0);
			$table->timestamps();

			$table->foreign("menu_id")->references("menu_id")->on("menus")->onDelete("cascade");
			$table->foreign("food_id")->references("food_id")->on("foods")->onDelete("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("menu_foods");
	}

}
