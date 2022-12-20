<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $train = new Train();
            $train->departure = $faker->company();
            $train->departure = $faker->city();
            $train->arrivals = $faker->city();
            $train->time_of_departure = $faker->date();
            $train->time_of_arrival = $faker->date();
            $train->train_code = $faker->word();
            $train->number_of_wagons = $faker->numberBetween(1, 20);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();
        }
    }
}
