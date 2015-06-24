<?php

class UserSeeder extends Seeder {

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
				"username" => "username".$i,
				"password"	=>	Hash::make("12345"),
				"salt"	=> "12345",
				"email"	=>	"username".$i."@gmail.com",
				"name"	=>	"name".$i,
				"level"	=>	"0",
				"age"	=>	"20",
				"gender"=>	"1",
				"phone"	=>	$i."1239874",
				"address"	=>	"Hà Nội"	
				);
		}
		DB::table("users")->insert($data);
	}

}
