<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductFoods extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("product_foods", function($table){
			$table->increments("product_food_id");
			$table->string("product_food_name");
			$table->string("product_food_price");
			$table->string("product_food_quantity");
			$table->text("product_food_description");
			$table->date("product_food_buy");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("product_foods");
	}

}
