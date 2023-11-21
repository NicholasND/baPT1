<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class informasi_pelanggan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('informasi_pelanggan')->insert([
            ['Nama'=>'Reynaldo', 
            'No telp'=>'0774298711',
            'Alamat'=>'Jl Subroto No. 78',
            'Email'=>'reynaldo@gmail.com']
        ]
        );
    }
}
