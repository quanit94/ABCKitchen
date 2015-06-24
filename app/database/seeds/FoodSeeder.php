<?php

class FoodSeeder extends Seeder {

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
				"food_name"	=>	"food_name".$i,
				"food_price"	=>	"30".$i,
				"food_description"	=>	"A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother's life is at risk.",
				"food_created_at"	=>	date("Y-m-d"),
				);
		}
		DB::table("foods")->insert($data);
	}

}
