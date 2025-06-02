<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::insert([
            [
                'nama' => 'Yumna Putri Nurjanah',
                'nis' => '20458',
                'gender' => 'P',
                'alamat' => 'Nglahar, Sumbersari, Moyudan, Sleman, D.I.Yogyakarta',
                'kontak' => '08583920970',
                'email' => '20458@sija.com',
                'status_lapor_pkl' => false,
            ],
            [
                'nama' => 'Nur Chesya Puspitasari',
                'nis' => '20437',
                'gender' => 'P',
                'alamat' => 'Kaidsoka, Purwormatani, Kalasan, Sleman, D.I.Yogyakarta',
                'kontak' => '089023678544',
                'email' => '20437@sija.com',
                'status_lapor_pkl' => false,
            ],
            [
                'nama' => 'Tsabita Irene Adielia',
                'nis' => '20455',
                'gender' => 'P',
                'alamat' => 'Kledongan, Sendangtirto, Berbah, Sleman, D.I.Yogyakarta',
                'kontak' => '08653489023',
                'email' => '20455@sija.com',
                'status_lapor_pkl' => false,
            ],
            [
                'nama' => 'Rosyidah Muthmainnah',
                'nis' => '20448',
                'gender' => 'P',
                'alamat' => 'Kadirojo II, Purwomartani, Kalasan, Sleman, D.I.Yogyakarta ',
                'kontak' => '087745319087',
                'email' => '20448@sija.com',
                'status_lapor_pkl' => false,
            ],
            [
                'nama' => 'Naufelirna Subkhi Ramadhani',
                'nis' => '20435',
                'gender' => 'P',
                'alamat' => 'Cangkringan, Sleman, D.I.Yogyakarta',
                'kontak' => '086578903380',
                'email' => '20435@sija.com',
                'status_lapor_pkl' => false,
            ],
            [
                'nama' => 'Surya Andhika Putri',
                'nis' => '20453',
                'gender' => 'P',
                'alamat' => 'Blok O, Banguntapan, Bantul, D.I.Yogyakarta',
                'kontak' => '087633245677',
                'email' => '20453@sija.com',
                'status_lapor_pkl' => false,
            ],
            [
                'nama' => 'Salwa Az-zahra Mizar',
                'nis' => '20451',
                'gender' => 'P',
                'alamat' => 'Berbah, Sleman, D.I.Yogyakarta',
                'kontak' => '086690065467',
                'email' => '20451@sija.com',
                'status_lapor_pkl' => false,
            ],
            [
                'nama' => 'Pembayun Maya Riyani',
                'nis' => '20442',
                'gender' => 'P',
                'alamat' => 'Ngemplak Caban, Tridadi, Sleman, Sleman, D.I.Yogyakarta',
                'kontak' => '085879081156',
                'email' => '20442@sija.com',
                'status_lapor_pkl' => false,
            ],
        ]);
    }
}