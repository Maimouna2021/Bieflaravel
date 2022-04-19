<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class paysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pays')->insert([
            'id'             => '1',
            'Libelle_pays' => 'Senegal',
            'created_at'     => '2022-02-19 11:11:18',
            'updated_at'     => '2022-02-19 11:11:18'
        ]);
    }
}

