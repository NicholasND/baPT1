<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class daftar_produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('daftar_produk')->insert([
            ['Description'=>'Sabun Lifebuoy', 
            'Quantity'=>'300.000 units',
            'Unit Price'=>'11,950.00',
            'Taxes'=>'11%',
            'Amount'=>'Rp 22,840,000.00']
        ]
        );
    }
}
