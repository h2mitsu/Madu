<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Madu',
            'alamat' => 'Jl. Kaliurang',
            'telepon' => '08691337420',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/logo-20230702120016.jpeg',
            'path_kartu_member' => '',
        ]);
    }
}
