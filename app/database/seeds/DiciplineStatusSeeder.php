<?php


class DiciplineStatusSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \DiciplineStatus::truncate();
        $faker = Faker\Factory::create();
        
        foreach(range(1, 10) as $index) {

            \DiciplineStatus::create([
                'name'			=> $faker->unique(false,1000000)->bothify('Displine status ###???'),
                'is_active'     => 1,
                'created_at' 	 =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	 =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}