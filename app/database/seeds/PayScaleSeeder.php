<?php


class PayScaleSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \PayScale::truncate();
        $faker = Faker\Factory::create();
        
        foreach(range(1, 10) as $index) {

            \PayScale::create([
                'name'			=> $faker->unique(false,1000000)->bothify('Payscale ###???'),
                'is_active'     => 1,
                'created_at' 	 =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	 =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}