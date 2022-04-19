<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class quartiersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('quartiers')->insert([
            'id'             => '1',
            'Libelle_quartier' => 'HLM',
            'created_at'     => '2022-12-25 16:13:57',
            'updated_at'     => '2022-12-25 16:13:57',
            'id_region'             => '1'

        ]);
    }
}
