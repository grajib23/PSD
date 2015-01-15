<?php


class RankSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \Rank::truncate();
        $faker = Faker\Factory::create();
        
        foreach(range(1, 15) as $index) {

            \Rank::create([
                'title'         => $faker->unique(false,1000000)->bothify('Rank ###???'),
                'is_active'     => 1,
                'created_at'     =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at'     =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}