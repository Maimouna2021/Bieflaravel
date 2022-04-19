<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;





class proprietairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proprietaires')->insert([
             'id'                => '2',
            'CodeProprietaire'   => 17,
            'Nom_proprietaire'   => 'DIOP',
        'Prenom_proprietaire'       => 'Ami',
            'Date_naissance' => '2002-04-09',
            'Lieu_naissance' => 'Bambeye',
            'code_piece_identite' => 78868900,
            'Numero_piece_identite' => 235678,
            'Adresse' => 'Keur serigne',
            'Email' => 'diopami'.'@gmail.com',
            'created_at' => '2022-02-22 15:20:30',
            'updated_at' => '2022-02-22 15:20:30',
            'id_genre'             => '2'
        ]);

    }
}