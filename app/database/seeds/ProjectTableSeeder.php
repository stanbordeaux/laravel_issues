<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProjectTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Project::create([
					'title' => 'Project ' .$index,
					'desc' => $faker->paragraph(1),
					'user_id' => $faker->randomDigit(1, 10)
			]);
		}
	}

}