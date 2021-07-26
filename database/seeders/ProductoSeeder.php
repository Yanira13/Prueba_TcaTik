<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'producto'=>'Mesa',
            'precio'=>'20',
            'observaciones'=>'Material:madera',
            'categoria'=>'mueble',
            'almacen'=>'sc Tenerife'
        ]);

        DB::table('productos')->insert([
            'producto'=>'Silla',
            'precio'=>'10',
            'observaciones'=>'Material:madera',
            'categoria'=>'mueble',
            'almacen'=>'sc Tenerife'
        ]);

        DB::table('productos')->insert([
            'producto'=>'Cama',
            'precio'=>'100',
            'observaciones'=>'Material:hierro',
            'categoria'=>'mueble',
            'almacen'=>'sc Tenerife'
        ]);

        DB::table('productos')->insert([
            'producto'=>'Pomo',
            'precio'=>'15',
            'observaciones'=>'Material:hierro',
            'categoria'=>'accesorio',
            'almacen'=>'sl Las Palmas'
        ]);

        DB::table('categoria')->insert([
            'categoria'=>'mueble',
        ]);
        DB::table('categoria')->insert([
            'categoria'=>'accesorio',
        ]);
        DB::table('categoria')->insert([
            'categoria'=>'ropa',
        ]);
    }
}
