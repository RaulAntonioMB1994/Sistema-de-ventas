<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'O SI NO / CONVERSACION CON FERNANDO BALCELLS',
            'description' => 'Este libro recoge una serie de conversaciones, grabadas y luego reescritas, entre Fernando Balcells y Carlos Altamirano, a lo lardo de 2018 e inicios de 2019; sin una pauta definida ni más propósito que esclarecer el trayecto, en parte introspectivo y en parte especulativo, de la producción de O Si No. La mayoría de las imágenes son bocetos hechos por Altamirano para visualizar la probable apariencia de las obras en construcción, junto a las reproducciones de trabajos anteriores; y tienen el encargo de dialogar con los textos aledaños. No pretenden documentar lo sucedido durante la muestra, tarea que queda reservada para un próximo volumen que incluirá, además, los textos surgidos de la página web y del segundo conversatorio, largamente postergado, de la Revisión crítica de la historia del arte chileno como trabajo de arte.',
            'stock' => '25',
            'price' => '15143',
            'pages_book' => '260',
            'author' => 'ALTAMIRANO, CARLOS',
            'editorial' => 'OCHOLIBROS',
            'discounts_percent' => '0',
            'extension' => 'jpeg',
            'id_categories' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'title' => 'FINAL ROUND / EL LEGADO DE STREET FIGHTER',
            'description' => 'Libro de ensayo encuadernado en cartoné cosido con hilo de 360 páginas interiores en color más cubiertas que contiene un estudio sobre videojuegos. Volumen único',
            'stock' => '20',
            'price' => '30400',
            'pages_book' => '360',
            'author' => 'RELAÑO GOMEZ, JOAQUIN',
            'editorial' => 'HEROES DE PAPEL',
            'discounts_percent' => '0',
            'extension' => 'jpeg',
            'id_categories' => '25',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
