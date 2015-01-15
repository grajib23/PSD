<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 1/15/2015
 * Time: 3:10 AM
 */

class DivisionSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \Division::truncate();
        $faker = Faker\Factory::create();
        $countryIds = Country::lists('id');

        foreach(range(1, 7) as $index) {

            \Division::create([
                'name'			=> $faker->unique(false,1000000)->state,
                'country_id'	=> $faker->randomElement($countryIds),
                'is_active'     => 1,
                'created_at' 	 =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	 =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}