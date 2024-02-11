<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'foto_profil' =>'boby wibowo.jpg',
                'name' => 'Boby Wibowo',
                'email' => 'bobywib@gmail.com',
                'no_hp' => 628823454568,
                'password' => Hash::make('12345678'),
                'poin'=> 143,
                'rupiah'=>12.000,
                'alamat'=> 'https://maps.app.goo.gl/M1E1V8W1xADKwpqQ7',
                'rekening'=> '2134876830987'
            ],
            [
                'foto_profil' => 'agnes cristi.jpg',
                'name' => 'Agnes Cristi',
                'email' => 'Acit28@gmail.com',
                'no_hp' => 6281345876996,
                'password' => Hash::make('87654321'),
                'poin'=> 100,
                'rupiah'=>8.000,
                'alamat'=> 'https://maps.app.goo.gl/NrhNviXHvsN3CvZU9',
                'rekening'=> '2342876983015'
            ],
            [
                'foto_profil' => 'lukman suhardi.jpg',
                'name' => 'Lukman Suhardi',
                'email' => 'Lukmanpunya@gmail.com',
                'no_hp' => 6287345876971,
                'password' => Hash::make('82345321'),
                'poin'=> 10,
                'rupiah'=>17.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '7896031763983'
            ],
            [
                'foto_profil' => 'agung podomoro.jpg',
                'name' => 'agung',
                'email' => 'podomoroagung@gmail.com',
                'no_hp' => 628732543,
                'password' => Hash::make('podomoro123'),
                'poin'=> 12,
                'rupiah'=>12.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '7896031723212324'
            ],
            [
                'foto_profil' => 'nowela enzy.jpg',
                'name' => 'enzy',
                'email' => 'nowela1234@gmail.com',
                'no_hp' => 6223412986,
                'password' => Hash::make('enzy123'),
                'poin'=> 100,
                'rupiah'=>26.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '78960317289982324'
            ],
            [
                'foto_profil' => 'niko.jpg',
                'name' => 'niko',
                'email' => 'niko2332@gmail.com',
                'no_hp' => 62897564324,
                'password' => Hash::make('niko123'),
                'poin'=> 32,
                'rupiah'=>2.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '7893455613282324'
            ],
            [
                'foto_profil' => 'felix.jpg',
                'name' => 'felix',
                'email' => 'felixonetwo@gmail.com',
                'no_hp' => 629876533445,
                'password' => Hash::make('felix123'),
                'poin'=> 10,
                'rupiah'=>4.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '7893423568582324'
            ],
            [
                'foto_profil' => 'admin.jpg',
                'name' => 'Admin Riski',
                'email' => 'rizkymantako@gmail.com',
                'no_hp' => 6298778973,
                'password' => Hash::make('riski123'),
                'poin'=> 18,
                'rupiah'=>3.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '78344345678845'
            ],
            [
                'foto_profil' => 'putri.jpg',
                'name' => 'putri aryani',
                'email' => 'putriaja@gmail.com',
                'no_hp' => 6298762323445,
                'password' => Hash::make('putri123'),
                'poin'=> 15,
                'rupiah'=>14.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '78344556677845'
            ],
            [
                'foto_profil' => 'yanto.jpg',
                'name' => 'yanto saputra',
                'email' => 'yantoaja@gmail.com',
                'no_hp' => 62987621545,
                'password' => Hash::make('suyanto123'),
                'poin'=> 18,
                'rupiah'=>19.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '783441234567845'
            ],
            [
                'foto_profil' => 'natasya.jpg',
                'name' => 'natashya putri',
                'email' => 'natasyatasya@gmail.com',
                'no_hp' => 6298762323,
                'password' => Hash::make('tasya123'),
                'poin'=> 28,
                'rupiah'=>9.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '7834412907845'
            ],
            [
                'foto_profil' => 'reza.jpg',
                'name' => 'reza aryani',
                'email' => 'rezakita@gmail.com',
                'no_hp' => 6298778973,
                'password' => Hash::make('reza123'),
                'poin'=> 18,
                'rupiah'=>3.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '78344345678845'
            ],
            [
                'foto_profil' => 'yani.jpg',
                'name' => 'i yani',
                'email' => 'yaniiv@gmail.com',
                'no_hp' => 62985665973,
                'password' => Hash::make('iky123'),
                'poin'=> 19,
                'rupiah'=>9.000,
                'alamat'=> 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8',
                'rekening'=> '78900745678845'
            ],
        ];
        foreach ($users as $userItem){
            User::create($userItem);
        }
    }
}
