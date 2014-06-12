<?php

class UsersTableSeeder extends Seeder {
	
	public function run() 
	{
		$this->command->info("setting up users table deleting contents....");

		
			
		$faker = Faker\Factory::create();
		foreach(range(1, 30) as $index)
		{
			User::create([
				"username" => $faker->unique()->userName,
				"email" => $faker->unique()->email,
				"password" => Hash::make($faker->word),
				
				
			]);

		}
		$this->command->info("seeding users table...");
	}
}