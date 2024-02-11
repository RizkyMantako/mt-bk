<?php

namespace Database\Seeders;

use App\Models\Donasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $donasi = [
            [
                'user_id' => 1,
                'foto_makanan' => 'ikan goreng.jpg',
                'deskripsi' => 'masih dalam keadaan baik, baru digoreng tadi siang, didonasikan karna gorengnya kebanyakan',
                'jenis_donasi' => 'makanan',
                'berat_makanan' => 1,
                'status' => 'terverifikasi',
            ],
            [
                'user_id' => 2,
                'foto_makanan' => 'sayur tumis.jpg',
                'deskripsi' => 'masih dalam keadaan baik, baru ditumis tadi siang, didonasikan untuk saudara yang membutuhkan',
                'jenis_donasi' => 'makanan',
                'berat_makanan' => 3,
                'status' => 'terverifikasi',
            ],
            [
                'user_id' => 3,
                'foto_makanan' => 'tomat.jpg',
                'deskripsi' => '-',
                'jenis_donasi' => 'bahan makanan',
                'berat_makanan' => 1,
                'status' => 'ditolak',
            ],
        ];
        foreach ($donasi as $donasiItem){
            Donasi::create($donasiItem);
        }
    }
}
