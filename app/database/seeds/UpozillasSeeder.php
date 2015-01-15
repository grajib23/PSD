<?php
class UpozillasSeeder extends \Seeder{
    public function run()
    {
        Eloquent::unguard() ;
        \Upzilla::truncate() ;
        $faker = Faker\Factory::create() ;
        $district_id = District::lists('id') ;
        foreach(range(1, 200) as $index){
            \Upzilla::create([
                'name'			=> $faker->unique(false,1000000)->city,
                'district_id'	=> $faker->randomElement($district_id),
                'is_active'     => 1,
                'created_at' 	=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'updated_at' 	=> $faker->dateTimeBetween($startDate = '-1  years', $endDate = 'now')
            ]);
        }
    }
}


?>