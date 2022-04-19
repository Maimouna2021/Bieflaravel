<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class regionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('regions')->insert([
            'id'             => '1',
            'Libelle_region' => 'Dakar',
            'created_at'     => '2022-11-23 13:33:58',
            'updated_at'     => '2022-11-23 13:33:58',
            'id_pays'             => '1'

        ]);
    }
}
