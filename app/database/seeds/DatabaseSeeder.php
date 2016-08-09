<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		$this->call('RoleTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('AdminTableSeeder');
		//$this->call('BookKeeperTableSeeder');
		//$this->call('ClientrmTableSeeder');
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

	}

}
