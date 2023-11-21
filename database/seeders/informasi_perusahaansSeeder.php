<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class informasi_perusahaansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('informasi_perusahaans')->insert([
            ['Nama'=>'PT Kimia Farma Tbk', 
            'No_telp'=>'0995321895',
            'Alamat'=>'Jl Kampungbalai',
            'Email'=>'KAMPUNGBALAI@gmail.com']
        ]
        );
    }
}
