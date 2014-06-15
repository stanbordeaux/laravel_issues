<?php

class IssueTableSeeder extends Seeder {
	
	public function run() 
	{
		$this->command->info("setting up users table to seed....");
		$min = 1;
		$max = 4;
		Issue::truncate();
		$faker = Faker\Factory::create();
		foreach(range(1, 30) as $index)
		{
			Issue::create([
				"title" => $faker->sentence(6),
				"desc" => $faker->paragraph(2) ,
				"status_id" => $faker->randomNumber($min, $max),
				"priority_id" => $faker->randomNumber(1, 4),
				"user_id" => $faker->randomNumber(1,10)
				
			]);

		}
		$this->command->info("seeding issues table...");
	}
}