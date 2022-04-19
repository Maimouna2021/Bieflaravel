<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class type_proprietesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('type_proprietes')->insert([
            'id'             => '1',
            'Libelle_type' => 'Etage',
            'created_at'     => '2020-03-26 12:01:08',
            'updated_at'     => '2020-03-26 12:01:08'
        ]);
    }
}

            // [ 
            // 'id'             => '1',
            // 'prenom'         => 'aladji maissa fall',
            // 'nom'            => 'lo',
            // 'civilite'       => 'homme',
            // 'date_naissance' => '1920-03-26',
            // 'lieu_naissance' => 'thies',
            // 'cni'            =>  10,
            // 'adresse'        => 'thialy rue 1',
            // 'nationnalite'   => 'senegalaise',
            // 'contact'        => '78 289 65 78',
            // 'created_at'     => '2020-03-26 12:01:08',
            // 'updated_at'     => '2020-03-26 12:01:08'
            // ],
