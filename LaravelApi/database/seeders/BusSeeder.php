<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class BusSeeder extends Seeder
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

            'bus_number' => '1001',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'id' => 2,

            'bus_number'  => '1002',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]];

        DB::table('buses')->insert($items);
    }
}
