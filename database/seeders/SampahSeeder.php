<?php

namespace Database\Seeders;

use App\Models\Sampah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sampah = [
            [
                'user_id' => 1,
                'foto_sampah' => 'sampah1.jpg',
                'deskripsi' => 'sampah sudah 3 hari pak',
                'berat_sampah' => 3,
                'status' => 'terverifikasi',
            ],
            [
                'user_id' => 5,
                'foto_sampah' => 'sampah2.jpg',
                'deskripsi' => 'sampah sudah 2 hari pak',
                'berat_sampah' => 2,
                'status' => 'terverifikasi',
            ],
            [
                'user_id' => 8,
                'foto_sampah' => 'sampah3.jpg',
                'deskripsi' => 'sampah baru saja kemarin',
                'berat_sampah' => 2,
                'status' => 'terverifikasi',
            ],
        ];
        foreach ($sampah as $sampahItem){
            Sampah::create($sampahItem);
        }
    }
}
