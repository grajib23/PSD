<?php
class LeaveTypeSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \LeaveType::truncate();
        $faker = Faker\Factory::create();
        
        foreach(range(1, 5) as $index) {

            \LeaveType::create([
                'duration'		=> $faker->randomDigitNotNull,
                'desc'          => $faker->text($maxNbChars = 100),
                'is_active'     => 1,
                'created_at' 	=>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	=>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}