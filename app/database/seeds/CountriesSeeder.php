<?php

class CountriesSeeder extends Seeder {


    public function run()
    {

        Eloquent::unguard();

        \Country::truncate();

        $faker = Faker\Factory::create();

        foreach(range(1, 3) as $index) {

            \Country::create([
                'name'			 => $faker->unique()->country,
                'is_active'		 => $faker->numberBetween($min=0,$max=1),
                'created_at' 	 =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	 =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }
}

?>