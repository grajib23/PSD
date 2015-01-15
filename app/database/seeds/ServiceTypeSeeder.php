<?php


class ServiceTypeSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \ServiceType::truncate();
        $faker = Faker\Factory::create();
        
        foreach(range(1, 10) as $index) {

            \ServiceType::create([
                'name'			=> $faker->unique(false,1000000)->bothify('ServiceType ###???'),
                'is_active'     => 1,
                'created_at' 	 =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	 =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}