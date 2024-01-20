<?php

namespace Database\Seeders;

use App\Models\AlamatUDD;
use App\Models\StokDarah;
use App\Models\JadwalMU;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use tidy;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        StokDarah::create([
            'alamatudd_id' => 1,
            'golda_a' => 200,
            'golda_b' => 200,
            'golda_ab' => 200,
            'golda_o' => 200
        ]);
        StokDarah::create([
            'alamatudd_id' => 2,
            'golda_a' => 100,
            'golda_b' => 100,
            'golda_ab' => 100,
            'golda_o' => 100
        ]);
        StokDarah::create([
            'alamatudd_id' => 3,
            'golda_a' => 300,
            'golda_b' => 300,
            'golda_ab' => 300,
            'golda_o' => 300
        ]);

        JadwalMU::create([
            'alamatudd_id' => 2,
            'tempat' => 'Hotel Java Heritage Purwokerto',
            'alamat' => 'Jl. Dr. Angka Kec. Purwokerto Timur',
            'kabkot' => 'Kabupaten Semarang',
            'jam_mulai' => '10:00',
            'jam_selesai' => '12:00',
            'tanggal' => date('2023-12-23 00:00:00'),
            'peruntukan' => 'Umum',
        ]);

        JadwalMU::create([
            'alamatudd_id' => 1,
            'tempat' => 'Desa Bojongsari Kec. Kembaran',
            'alamat' => 'Jl. Balai Desa Bojongsari Kec. Kembaran',
            'kabkot' => 'Kota Semarang',
            'jam_mulai' => '08:00',
            'jam_selesai' => '15:00',
            'tanggal' => date('2023-12-25 00:00:00'),
            'peruntukan' => 'Internal',
        ]);

        JadwalMU::create([
            'alamatudd_id' => 3,
            'tempat' => 'DESA DELEGTUKANG',
            'alamat' => 'Delegtukang Wiradesa',
            'kabkot' => 'Kota Tegal',
            'jam_mulai' => '15:00',
            'jam_selesai' => '20:00',
            'tanggal' => date('2023-12-22 00:00:00'),
            'peruntukan' => 'Umum',
        ]);

        User::create([
            'first_name' => 'Camela',
            'last_name' => 'Devs',
            'username' => 'meldsvt',
            'email' => 'camelaputri1@gmail.com',
            'alamatudd_id' => '1',
            'password' => bcrypt('punyaamel8'),
            'isAdmin' => 1
        ]);

        User::create([
            'first_name' => 'Rizky',
            'last_name' => 'Apriansyah',
            'username' => 'kikap',
            'email' => 'rizkyap@gmail.com',
            'alamatudd_id' => '3',
            'password' => bcrypt('rizky'),
        ]);

        User::create([
            'first_name' => 'Nedd',
            'last_name' => 'Saintra',
            'username' => 'nedstra',
            'email' => 'ned@gmail.com',
            'alamatudd_id' => '2',
            'password' => bcrypt('nedstr'),
        ]);
    }
}
