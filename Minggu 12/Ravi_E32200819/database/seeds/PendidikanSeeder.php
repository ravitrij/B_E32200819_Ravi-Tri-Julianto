<?php

use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidikan')->insert([
            'nama' => 'SMKN 2 Jember',
            'tingkatan' => '3',
            'tahun_masuk' => '2017',
            'tahun_keluar' => '2020'
        ]);
    }
}
