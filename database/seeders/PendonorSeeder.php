<?php

namespace Database\Seeders;

use App\Models\Pendonor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pendonor::create([
            'alamatudd_id'      =>  1,
            'user_id'           =>  1,
            'no_ktp'            =>  3325112101890002,
            'no_piagam'         =>  'y83rbd8328947hs334',
            'nama'              =>  'WAHORO ADINGAVIAT',
            'tanggal_lahir'     =>  date('1989-01-21'),
            'tempat_lahir'      =>  'BATANG',
            'alamat'            =>  'Dukuh Kebanyon RT.001/004 Kel. Kasepuhan Kec. Batang Kab. Batang',
            'jk'                =>  'Laki-laki',
            'agama'             =>  'Islam',
            'no_telepon'        =>  '088802617953',
            'pekerjaan'         =>  'WIRASWASTA',
            'golda'             =>  'A +',
            'jumlah_donasi'     =>  50,
            'donor_pertama'     =>  date('2015-11-11'),
            'piagam_ke'         =>  50,
            'tanggal_piagam'    =>  date('2023-02-05'),
            'status'            =>  0
        ]);
    }
}
