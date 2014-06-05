<?php 

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();

		$faker = Faker\Factory::create();
		
		User::create([
			'username' => 'stan',
			'email' => 'stan@email.com',
			'password' => Hash::make('1234')
		]);

		foreach (range(2, 10) as $index)
		{
			User::create([
				'username' => $faker->userName(),
				'email' => $faker->email(),
				'password' => Hash::make('1234')
			]);
		}
		

	}
}
