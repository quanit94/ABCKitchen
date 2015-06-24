<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFoods extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("foods", function($table){
			$table->increments("food_id");
			$table->string("food_name", 255);
			$table->integer("food_price");
			$table->string("food_image", 255);
			$table->text("food_description");
			$table->date("food_created_at");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("foods");
	}
}
