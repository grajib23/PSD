<?php


class OrganizationSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \Organization::truncate();
        $faker = Faker\Factory::create();
        
        foreach(range(1, 10) as $index) {

            \Organization::create([
                'name'			=> $faker->unique(false,1000000)->company,
                'is_active'     => 1,
                'created_at' 	 =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	 =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}