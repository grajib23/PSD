//
<?php


class CourseSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \Course::truncate();
        $faker = Faker\Factory::create();
        
        foreach(range(1, 10) as $index) {

            \Course::create([
                'name'			=> $faker->unique(false,1000000)->bothify('Course ###???'),
                'is_active'     => 1,
                'created_at' 	 =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	 =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}