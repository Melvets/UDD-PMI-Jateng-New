<?php

namespace Database\Seeders;

use App\Models\AlamatUDD;
use App\Models\StokDarah;
use App\Models\JadwalMU;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Semarang',
            'alamat' => 'Jl MGR Soegijopranoto SJ No. 31 dan 35',
            'telp' => '024 - 3515050',
            'email' => 'uddpmismg@yahoo.com'
        ]);

        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Semarang',
            'alamat' => 'Jl. Gatot Subroto No.96 Ungaran',
            'telp' => '024 - 76902606',
            'email' => 'udd_kabsemarang@pmi.or.id'            
        ]);

        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Tegal',
            'alamat' => 'Jl. Aiptu KS. Tubun No. 8',
            'telp' => '0283 - 343244',
            'email' => 'udd_kotategal@pmi.or.id'            
        ]);

        StokDarah::create([
            'alamat_id' => 1,
            'golda_a' => 200,
            'golda_b' => 200,
            'golda_ab' => 200,
            'golda_o' => 200
        ]);
        StokDarah::create([
            'alamat_id' => 2,
            'golda_a' => 100,
            'golda_b' => 100,
            'golda_ab' => 100,
            'golda_o' => 100
        ]);
        StokDarah::create([
            'alamat_id' => 3,
            'golda_a' => 300,
            'golda_b' => 300,
            'golda_ab' => 300,
            'golda_o' => 300
        ]);

        JadwalMU::create([
            'alamat_id' => 2,
            'tempat' => 'Hotel Java Heritage Purwokerto',
            'alamat' => 'Jl. Dr. Angka Kec. Purwokerto Timur',
            'jam_mulai' => '19:30',
            'jam_selesai' => '20:30',
            'peruntukan' => 'Umum',
        ]);
        
        JadwalMU::create([
            'alamat_id' => 1,
            'tempat' => 'Desa Bojongsari Kec. Kembaran',
            'alamat' => 'Jl. Balai Desa Bojongsari Kec. Kembaran',
            'jam_mulai' => '12:30',
            'jam_selesai' => '15:30',
            'peruntukan' => 'Umum',
        ]);

        JadwalMU::create([
            'alamat_id' => 3,
            'tempat' => 'DESA DELEGTUKANG',
            'alamat' => 'Delegtukang Wiradesa',
            'jam_mulai' => '23:30',
            'jam_selesai' => '24:00',
            'peruntukan' => 'Umum',
        ]);

        User::create([
            'nama' => 'Camela Devs',
            'username' => 'meldsvt',
            'email' => 'camelaputri1@gmail.com',
            'alamatudd_id' => '1',
            'password' => bcrypt('punyaamel8'),
        ]);

        User::create([
            'nama' => 'Muhammad Nazril Ilham',
            'username' => 'dnotnut',
            'email' => 'ilhamjepara@gmail.com',
            'alamatudd_id' => '2',
            'password' => bcrypt('dnotnut'),
        ]);
    }
}
