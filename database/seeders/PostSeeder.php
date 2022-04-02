<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'nombre' => 'Pedro',
            'ingredientes' => 'Fresa,crema,pan',
            'tamaño' => 'Mediano',
            'precio' => 150
            ],
            [
                'nombre' => 'Juan',
                'ingredientes' => 'Zanahoria,nueces,pan',
                'tamaño' => 'Grande',
                'precio' => 200
            ],
        ];
        DB::table('posts')->insert($data);
    }
}
