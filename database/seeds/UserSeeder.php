<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'rut' => '21344896-1',
            'name' => 'Leonel Luis',
            'email' => 'leouis@bookworm.cl',
            'password' => bcrypt('leouisbookworm'),
            'type' => 'Administrador',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'rut' => '20666273-5',
            'name' => 'Maria Francisca de las mercedes',
            'email' => 'marifran@bookworm.cl',
            'password' => bcrypt('marifranbookworm'),
            'type' => 'Vendedor(a)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
