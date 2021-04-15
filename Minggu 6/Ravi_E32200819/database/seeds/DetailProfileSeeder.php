<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_telp' => '081xxxxxxxx',
            'ttl' => '2000-11-26',
            'foto' => 'picture.png'
        ]);
    }
}
