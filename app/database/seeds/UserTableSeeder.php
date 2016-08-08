<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$roles = Role::all()->lists('id');
		foreach(range(1, 10) as $index)
		{
			User::create([
				'roles_id' => $faker->randomElement($roles),
				'first_name' => $faker->firstName(),
				'other_names' => $faker->name(),
				'email' => $faker->email(),
				'password' => $faker->word(),
				
			]);
		}
	}

}