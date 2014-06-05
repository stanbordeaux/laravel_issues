<?php 

class IssuesTableSeeder extends Seeder {

	public function run()
	{
		Issue::truncate();
		$faker = Faker\Factory::create();

		foreach (range(1, 30) as $index)
		{
			Issue::create([
				'title' => $faker->sentence(4),
				'desc' => $faker->paragraph(1),
				'user_id' => $faker->randomDigit(1, 10)
			]);

		}
		

		
	}
}
