<?php

namespace Database\Seeders;

use App\Models\AlamatUDD;
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
    }
}
