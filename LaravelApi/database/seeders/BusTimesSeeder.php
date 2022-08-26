<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BusTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [[
            'id' => 1,
            'station_id' => 2,
             'track_id' => 1,
             'bus_id' => 2,



            'bus_timee' => '19:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'id' => 2,
            'station_id' => 1,
             'track_id' => 2,
             'bus_id' => 1,



            'bus_timee' => '18:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]];

        DB::table('bustime')->insert($items);
    }
}
