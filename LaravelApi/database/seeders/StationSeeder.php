<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StationSeeder extends Seeder
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
            'station_number' => '1001',
            'station_name' => 'İbrahimli',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'id' => 2,
            'station_number' => '1002',
            'station_name' => 'Binevler',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]];

        DB::table('stations')->insert($items);
    }
}
