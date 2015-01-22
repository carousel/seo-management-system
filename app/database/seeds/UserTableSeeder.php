<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
        User::truncate();
        User::create([
            "username" => "miro",
            "email" => "miroslav.trninic@gmail.com",
            "activated" => 1,
            "role" => "admin",
            "password" => Hash::make("bumerang"),
        
        ]);
        User::create([
            "username" => "mads",
            "email" => "mads@relationtechnology.dk",
            "activated" => 1,
            "role" => "admin",
            "password" => Hash::make("jespersen"),
        
        ]);
        User::create([
            "username" => "charlie",
            "email" => "charlie.parker@jazz.com",
            "activated" => 1,
            "role" => "user",
            "password" => Hash::make("bebop"),
        
        ]);
		//$faker = Faker::create();

		//foreach(range(1, 10) as $index)
		//{
			//UsersTableSeeder::create([

			//]);
		//}
	}

}
