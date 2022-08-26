<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class TrackSeeder extends Seeder
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

            'track_name' => 'binevler-gatem',
            'track_nick' => 'B06',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'id' => 2,

            'track_name' => 'binevler-karatas',
            'track_nick' => 'B07',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]];

        DB::table('tracks')->insert($items);
    }
}
