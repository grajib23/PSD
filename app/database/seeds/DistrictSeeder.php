<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 1/15/2015
 * Time: 3:27 AM
 */

class DistrictSeeder extends \Seeder{

    public function run()
    {
        Eloquent::unguard();
        \District::truncate();
        $faker = Faker\Factory::create();
        $division_id = Division::lists('id');
        foreach(range(1, 64) as $index){
            \District::create([
                'name'			=> $faker->unique(false,1000000)->city,
                'division_id'	=> $faker->randomElement($division_id),
                'is_active'     => 1,
                'created_at' 	 =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	 =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')
            ]);
        }
    }

}