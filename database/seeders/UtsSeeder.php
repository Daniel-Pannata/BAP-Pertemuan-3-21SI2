<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class UtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('program_studis')->insert([
            ['nama'=>'Teknik Informatika', 
            'Deskripsi'=>'Program studi Teknik Informatika fokus pada pengembangan perangkat lunak, sistem informasi, dan teknologi komputer'],
            ['nama'=>'Manajemen Bisnis', 
            'Deskripsi'=>'Program studi Manajemen Bisnis membekali mahasiswa dengan pengetahuan tentang manajemen, keuangan, pemasaran, dan operasi bisnis.'],
            ['nama'=>'Akuntansi', 
            'Deskripsi'=>'Program studi Akuntansi fokus pada pelaporan keuangan, analisis keuangan, dan perpajakan.'],
            ['nama'=>'Arsitektur', 
            'Deskripsi'=>'Program studi Arsitektur membekali mahasiswa dengan pengetahuan dan keterampilan dalam merancang dan merencanakan bangunan dan lingkungan.'],
            ['nama'=>'Manajemen Perhotelan', 
            'Deskripsi'=>'Program studi Manajemen Perhotelan mempersiapkan mahasiswa untuk mengelola operasi hotel dan bisnis perhotelan'],
        ]
        );

        

        DB::table('pembayarans')->insert([
            ['studentID'=>'03081210001', 
            'Amount'=>100000.00,
            'Payment_date'=>'2023-01-15'],
            ['studentID'=>'03081210002', 
            'Amount'=>200000.00,
            'Payment_date'=>'2023-01-16'],
            ['studentID'=>'03081210003', 
            'Amount'=>300000.00,
            'Payment_date'=>'2023-01-17'],
            ['studentID'=>'03081210004', 
            'Amount'=>400000.00,
            'Payment_date'=>'2023-01-18'],
            ['studentID'=>'03081210005', 
            'Amount'=>500000.00,
            'Payment_date'=>'2023-01-19'],
        ]
        );

        DB::table('transkrip_akademiks')->insert([
            [
                'Student_id' => '03081210006',
                'Kode_matakuliah' => 101,
                'Kode_term' => 'Term1',
                'nilai' => 'A',
                'sks' => 3,
                'gpa' => 4.0,
            ],
            [
                'Student_id' => '03081210007',
                'Kode_matakuliah' => 102,
                'Kode_term' => 'Term1',
                'nilai' => 'B',
                'sks' => 4,
                'gpa' => 3.0,
            ],
            [
                'Student_id' => '03081210008',
                'Kode_matakuliah' => 101,
                'Kode_term' => 'Term1',
                'nilai' => 'A',
                'sks' => 3,
                'gpa' => 4.0,
            ],
            [
                'Student_id' => '03081210009',
                'Kode_matakuliah' => 102,
                'Kode_term' => 'Term1',
                'nilai' => 'C',
                'sks' => 4,
                'gpa' => 2.0,
            ],
            [
                'Student_id' => '03081210010',
                'Kode_matakuliah' => 101,
                'Kode_term' => 'Term1',
                'nilai' => 'B',
                'sks' => 3,
                'gpa' => 3.0,
            ],
        ]
        );
    }
}
