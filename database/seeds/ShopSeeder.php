<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'address' => 'Arturo prat #2089',
            'city' => 'Linares',
            'office_hours' => '10:00 AM - 10:00 PM',
            'phone' => '73 2 22 66 02',
            'email' => 'shopslinares@bookworm.cl',
            'id_business' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('shops')->insert([
            'address' => '1 Oriente con 2 sur #289',
            'city' => 'Talca',
            'office_hours' => '10:00 AM - 10:00 PM',
            'phone' => '73 2 21 65 66',
            'email' => 'shopstalca@bookworm.cl',
            'id_business' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
