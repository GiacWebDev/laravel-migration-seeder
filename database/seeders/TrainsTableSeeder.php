<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->company = 'Trenitalia';
        $train->slug = 'trenitalia';
        $train->departure_station = 'Firenze SMN';
        $train->arrival_station = 'Torino';
        $train->departure_time = '2022-11-23 10:00:00';
        $train->arrival_time = '2022-11-23 12:00:00';
        $train->train_code = '91243';
        $train->carriage_number = '4';
        $train->on_time = 0;
        $train->canceled = 1;

        $train->save();
    }
}
