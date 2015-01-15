//
<?php


class AdditionalQualificationSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();
        \AdditionalQualification::truncate();
        $faker = Faker\Factory::create();
        
        foreach(range(1, 5) as $index) {

            \AdditionalQualification::create([
                'name'			=> $faker->unique(false,1000000)->bothify('Qualifacation ###???'),
                'is_active'     => 1,
                'created_at' 	 =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	 =>$faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')

            ]);
        }
    }

}