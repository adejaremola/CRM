<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BookKeepersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$users = User::all()->lists('id');

		foreach(range(1, 10) as $index)
		{
			BookKeeper::create([
				'user_id' => $faker->randomElement($users),
			]);
		}
	}

}