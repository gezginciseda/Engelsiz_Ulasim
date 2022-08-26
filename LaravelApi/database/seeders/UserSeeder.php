<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            'name' => 'Merve Erbilici',
            'email' => 'merveerbilici@gaziantepbilisim.com.tr',
            'tc' => '12345678910',
            'phone' => '12345678952',
            'password' => Hash::make('123654'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'id' => 2,
            'name' => 'İsmail Ünal',
            'email' => 'ismailunal@gaziantepbilisim.com.tr',
            'tc' => '12345678910',
            'phone' => '12345678952',
            'password' => Hash::make('123654'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],];

        DB::table('users')->insert($items);
    }
}
