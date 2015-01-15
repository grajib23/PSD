<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 1/15/2015
 * Time: 3:10 AM
 */

class LanguageSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \Language::truncate();
        $faker = Faker\Factory::create();
        

        foreach(range(1, 4) as $index) {

            \Language::create([
                'name'			=> $faker->unique(false,1000000)->state,
                'name'			=> $faker->languageCode,
                'is_active'     => 1,
                'created_at' 	=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	=> $faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}