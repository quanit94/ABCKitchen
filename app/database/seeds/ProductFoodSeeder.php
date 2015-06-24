<?php

class ProductFoodSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = "";
		for($i = 1; $i <= 50; $i ++){
			$data[] = array(
				"product_food_name"	=>	"product_food_name".$i,
				"product_food_price"	=>	"10".$i,
				"product_food_quantity"	=>	"1".$i,
				"product_food_description"	=>	"A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother's life is at risk.",
				"product_food_buy"	=>	date("Y-m-d"),
				);
		}
		DB::table("product_foods")->insert($data);
	}

}
