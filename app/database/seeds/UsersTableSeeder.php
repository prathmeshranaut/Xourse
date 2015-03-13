<?php 

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder{

	public function run(){
		$faker = Faker::create();

		foreach (range(1,30) as $index){
			User::create([

				'username'=>$faker->sentence(5),
				'email'=>$faker->sentence(1),
				'password'=>$faker->sentence(1)	
				]);
		}
	}
}