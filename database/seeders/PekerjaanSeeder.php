<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pekerjaan::create([
            'pekerjaan' => 'Swasta'
        ]);
    }
}
