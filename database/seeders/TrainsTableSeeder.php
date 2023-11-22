<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->slug = Str::slug($train->departure_station, '-');
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('2022-11-23 10:00:00', '2022-11-23 12:00:00')->format('Y-m-d H:i:s');
            $train->arrival_time = $faker->dateTimeBetween('2022-11-23 12:00:00', '2022-11-23 14:00:00')->format('Y-m-d H:i:s');
            $train->train_code = '91243' . $i;
            $train->carriage_number = '4' . $i;
            $train->on_time = $faker->boolean(); // 0 or 1
            $train->canceled = $faker->boolean(); // 0 or 1

            $train->save();
            // dump($train);
        }
    }
}
