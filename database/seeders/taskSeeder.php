<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;


class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        // 
        DB::table('matakuliahs')->insert([
            ['kode_matakuliah'=>'MK001', 
            'nama_matakuliah'=>'Pemrograman Aplikasi Bisnis',
            'sks'=>4],
            ['kode_matakuliah'=>'MK002', 
            'nama_matakuliah'=>'Audit SI',
            'sks'=>4],
            ['kode_matakuliah'=>'MK003', 
            'nama_matakuliah'=>'Sistem Informasi Perusahaan',
            'sks'=>4]
        ]
        );

        $Faker = Faker::create('id_ID');

        for($i = 1; $i<=50; $i++){

             // insert data ke table pegawai menggunakan Faker
        DB::table('mahasiswas')->insert([
            'studentID'=>'03000811'&$i, 
            'nama'=> $Faker->name,
            'tahun_masuk'=> '2021',
            'jurusan'=> $Faker->address 
        ]);
    }
    DB::table('khs')->insert([
            ['kode_khs'=>'khs001', 
            'keterangan'=>'2022/2023',
            'keterangan_singkat'=>'2022/2023'],
            ['kode_khs'=>'khs002', 
            'keterangan'=>'2022/2023',
            'keterangan_singkat'=>'2022/2023'],
            ['kode_khs'=>'khs003', 
            'keterangan'=>'2022/2023',
            'keterangan_singkat'=>'2022/2023']
        ]
        );
    DB::table('khs_details')->insert([
            ['kode_khs_detail'=>'khs001', 
            'kode_khs'=>'khs001',
            'nilai'=>100],
            ['kode_khs_detail'=>'khs002', 
            'kode_khs'=>'khs002',
            'nilai'=>100],
            ['kode_khs_detail'=>'khs003', 
            'kode_khs'=>'khs003',
            'nilai'=>100],
        ]
        );
        
        DB::table('ProgramStudis')->insert([
            ['ID'=>'100810015',
            'nama_Program Studi'=>'Sistem Informasi',
            'deskripsi'=>'Pembelajaran tentang teknologi sistem informasi'],
            ['ID'=>'100810016',
            'nama_Program Studi'=>'Teknologi Informasi',
            'deskripsi'=>'Pembelajaran tentang teknologi informasi yang dipake'],
            ['ID'=>'100810017',
            'nama_Program Studi'=>'Hospitality',
            'deskripsi'=>'Pembelajaran tentang service dan manajemen pekerjaan'],
            ['ID'=>'100810018',
            'nama_Program Studi'=>'Manajemen',
            'deskripsi'=>'Pembelajaran tentang manajemen dalam beberapa aspek pekerjaan'],
            ['ID'=>'100810019',
            'nama_Program Studi'=>'Accounting',
            'deskripsi'=>'Pembelajaran tentang manajemen keuangan']
        ]
        );

        $Faker = Faker::create('id_ID');

        for($i = 1; $i<=50; $i++){

             // insert data ke table pegawai menggunakan Faker
        DB::table('ProgramStudis')->insert([
            'ID'=>'100810015'&$i, 
            'nama_Program Studi'=> $Faker->name,
            'deskripsi'=> 'Pembelajaran tentang'
        ]);
    }
    DB::table('Pembayarans')->insert([
        ['ID'=>'081229810',
        'student_id'=>'080112340',
        'Amount'=>'$450.000',
        'payment_date'=>'23/10/2015',
        'payment_method'=>'BCA',],
        ['ID'=>'081229820',
        'student_id'=>'080112356',
        'Amount'=>'$950.000',
        'payment_date'=>'15/5/2017',
        'payment_method'=>'Bank Mandiri',],
        ['ID'=>'081229830',
        'student_id'=>'080112321',
        'Amount'=>'$623.000',
        'payment_date'=>'5/8/2020',
        'payment_method'=>'BNI',],
        ['ID'=>'081229840',
        'student_id'=>'080112315',
        'Amount'=>'$700.000',
        'payment_date'=>'10/9/2015',
        'payment_method'=>'BCA',],
        ['ID'=>'081229843',
        'student_id'=>'080112338',
        'Amount'=>'$875.000',
        'payment_date'=>'27/3/2017',
        'payment_method'=>'Bank Mandiri',]
    ]
    );

    $Faker = Faker::create('id_ID');

    for($i = 1; $i<=50; $i++){

         // insert data ke table pegawai menggunakan Faker
    DB::table('Pembayarans')->insert([
        'ID'=>'081229810'&$i, 
        'student_id'=>'080112340'&$i,
        'amount'=>'$450.000',
        'payment_date'=> $Faker->date,
        'payment_method'=> 'BCA'
    ]);
    }

    DB::table('TranskripAkademiks')->insert([
        ['ID'=>'20014740',
        'student_id'=>'08415580',
        'kode_matakuliah'=>'86623144',
        'kode_term'=>'75523223',
        'nilai'=>'90',
        'sks'=>'3',
        'Gpa'=>'3,5',],
        ['ID'=>'20014750',
        'student_id'=>'08415584',
        'kode_matakuliah'=>'86623145',
        'kode_term'=>'75523224',
        'nilai'=>'85',
        'sks'=>'2',
        'Gpa'=>'3',],
        ['ID'=>'20014760',
        'student_id'=>'08415585',
        'kode_matakuliah'=>'86623146',
        'kode_term'=>'75523227',
        'nilai'=>'90',
        'sks'=>'3',
        'Gpa'=>'3,5',],
        ['ID'=>'20014770',
        'student_id'=>'08415586',
        'kode_matakuliah'=>'86623147',
        'kode_term'=>'75523228',
        'nilai'=>'95',
        'sks'=>'4',
        'Gpa'=>'3,5',],
        ['ID'=>'20014780',
        'student_id'=>'08415587',
        'kode_matakuliah'=>'86623148',
        'kode_term'=>'75523229',
        'nilai'=>'90',
        'sks'=>'3',
        'Gpa'=>'3,5',]
    ]
    );

    $Faker = Faker::create('id_ID');

    for($i = 1; $i<=50; $i++){

         // insert data ke table pegawai menggunakan Faker
    DB::table('TranskripAkademiks')->insert([
        'ID'=>'20014740'&$i, 
        'student_id'=>'08415580'&$i,
        'kode_matakuliah'=>'86623144',
        'kode_term'=> '75523223',
        'nilai'=> '90',
        'sks'=> '3',
        'Gpa'=> '3,5'
    ]);
    };
}
}
