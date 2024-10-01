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
            'jk'                =>  'Laki-Laki',
            'agama'             =>  'Islam',
            'no_telepon'        =>  '088802617953',
            'pekerjaan'         =>  'WIRASWASTA',
            'golda'             =>  'A +',
            'jumlah_donasi'     =>  50,
            'donor_pertama'     =>  date('2015-11-11'),
            'piagam_ke'         =>  50,
            'tanggal_piagam'    =>  date('2023-02-05'),
        ]);

        Pendonor::create([
            'alamatudd_id'      =>  2,
            'user_id'           =>  3,
            'no_ktp'            =>  3325113012650006,
            'no_piagam'         =>  'y83rbd8328947hs334',
            'nama'              =>  'MUJANA',
            'tanggal_lahir'     =>  date('1965-12-30'),
            'tempat_lahir'      =>  'BATANG',
            'alamat'            =>  'Jl. Ahmad Yani Gg. Tengger No.10 RT.007/006 Kel. Kauman Kec. Batang.',
            'jk'                =>  'Laki-Laki',
            'agama'             =>  'Islam',
            'no_telepon'        =>  '085325081233',
            'pekerjaan'         =>  'WIRASWASTA',
            'golda'             =>  'B +',
            'jumlah_donasi'     =>  50,
            'donor_pertama'     =>  date('2015-11-11'),
            'piagam_ke'         =>  50,
            'tanggal_piagam'    =>  date('2021-05-05'),
        ]);

        Pendonor::create([
            'alamatudd_id'      =>  3,
            'user_id'           =>  2,
            'no_ktp'            =>  3305175507790002,
            'no_piagam'         =>  'y83rbd8328947hs334',
            'nama'              =>  'YEN MOY',
            'tanggal_lahir'     =>  date('1979-07-15'),
            'tempat_lahir'      =>  'TANGERANG',
            'alamat'            =>  'Dk. Kalibatur Rt 04/ Rw 04 Giyanti Rowokele Kebumen',
            'jk'                =>  'Perempuan',
            'agama'             =>  'Budha',
            'no_telepon'        =>  '085726283609',
            'pekerjaan'         =>  'WIRASWASTA',
            'golda'             =>  'A +',
            'jumlah_donasi'     =>  50,
            'donor_pertama'     =>  date('2015-11-11'),
            'piagam_ke'         =>  50,
            'tanggal_piagam'    =>  date('2021-12-05'),
        ]);
    }
}
