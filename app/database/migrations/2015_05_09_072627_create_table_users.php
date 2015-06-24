<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("users", function($table){
			$table->increments("id");
			$table->string("username", 255);
			$table->string("password", 255);
			$table->string("salt", 255);
			$table->string("email", 255);
			$table->string("name",255);
			$table->enum("level", array(0,1))->default(0);
			$table->integer("age")->unsigned();
			$table->enum("gender", array(0,1));
			$table->string("phone",255);
			$table->string("address", 255);
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("users");
	}

}
