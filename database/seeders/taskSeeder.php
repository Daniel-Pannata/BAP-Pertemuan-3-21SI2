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
     */
    public function run(): void
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
    DB::table('program_studi')->insert([
        ['nama'=>' Teknik Informatika', 
        'Deskripsi'=>'Program studi Teknik Informatika fokus pada pengembangan perangkat lunak, sistem informasi, dan teknologi komputer'],
        ['nama'=>' Manajemen Bisnis', 
        'Deskripsi'=>'Program studi Manajemen Bisnis membekali mahasiswa dengan pengetahuan tentang manajemen, keuangan, pemasaran, dan operasi bisnis.'],
        ['nama'=>' Akuntansi', 
        'Deskripsi'=>'Program studi Akuntansi fokus pada pelaporan keuangan, analisis keuangan, dan perpajakan.'],
        ['nama'=>' Arsitektur', 
        'Deskripsi'=>'Program studi Arsitektur membekali mahasiswa dengan pengetahuan dan keterampilan dalam merancang dan merencanakan bangunan dan lingkungan.'],
        ['nama'=>' Manajemen Perhotelan', 
        'Deskripsi'=>'Program studi Manajemen Perhotelan mempersiapkan mahasiswa untuk mengelola operasi hotel dan bisnis perhotelan.'],
        ]
        );
    }
}
