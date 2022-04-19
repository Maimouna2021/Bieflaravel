<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class proprietesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proprietes')->insert([
            'id'             => '1',
            'Adresse_propriete' => 'Dakar',
            'Superficie' => 12,
            'Nbre_etage' => 5,
            'id_proprietaire' => '1',
            'id_type_propriete' => '1',
            'id_quartier' => '1',
            'created_at'     => '2022-06-07 06:51:40',
            'updated_at'     => '2022-06-07 06:51:40'
        ]);
    }
}
