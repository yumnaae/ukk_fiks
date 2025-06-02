<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industri;

class IndustriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Industri::insert([
            [
                'nama' => 'PT Botika Teknologi Indonesia',
                'bidang_usaha' => 'Start-up AI',
                'alamat' => 'Jl Perumnas Blok E III No 50, Seturan, Sleman, Yogyakarta',
                'kontak' => '0818-0220-7000',
                'email' => 'admin@botika.online',
                'website' => 'https://botika.online',
            ],
            [
                'nama' => 'PT Gamatechno Indonesia',
                'bidang_usaha' => 'Teknologi Informasi dan Komunikasi',
                'alamat' => 'Jl. Purwomartani, Sleman, Daerah Istimewa Yogyakarta',
                'kontak' => '+62-274-566161',
                'email' => 'info@gamatechno.com',
                'website' => 'https://www.gamatechno.com/',
            ],
            [
                'nama' => 'PT Murni Cahaya Pratama',
                'bidang_usaha' => 'Cat dan Tiner',
                'alamat' => 'Jl. Kp. Lio Baru, Desa No.Km. 2, Sanja, Kec. Citeureup, Kabupaten Bogor, Jawa Barat',
                'kontak' => '0858-2909-5046',
                'email' => 'info@cargloss.co.id',
                'website' => 'https://cargloss.co.id/',
            ],
            [
                'nama' => 'PT Aksa Digital Group',
                'bidang_usaha' => 'Teknologi Informasi',
                'alamat' => 'Jl. Wongso Permono No.26, Klidon, Sukoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581',
                'kontak' => '08982909000',
                'email' => 'info@aksa.id',
                'website' => 'https://aksa.id/',
            ],
        ]);
    }
}