<?php

class MenuSeeder extends Seeder {

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
				"menu_name"	=>	"menu_name".$i,
				"menu_price"	=>	"30".$i,
				"menu_description"	=>	"A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother's life is at risk.",
				"menu_created_at"	=>	date("Y-m-d"),
				);
		}
		DB::table("menus")->insert($data);
	}

}
