<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AlamatUDD;

class AlamatUDDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Banjarnegara',
            'alamat' => 'Jl. Letjend Suprapto No.73, Wangon, Kutabanjarnegara, Kec. Banjarnegara, Kabupaten Banjarnegara, Jawa Tengah 53417',
            'telp' => '(0286) 591471',
            'email' => 'udd_kabbanjarnegara@pmi.or.id',
            'titik_koordinat' => '-7.399377438467887, 109.68164745336134'
        ]);

        // 2
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Banyumas',
            'alamat' => 'Dusun II Sokaraja Tengah, Sokaraja Tengah, Kec. Sokaraja, Kabupaten Banyumas, Jawa Tengah 53181',
            'telp' => '(0281) 6441014',
            'email' => 'udd_kabbanyumas@pmi.or.id',
            'titik_koordinat' => '-7.460874343720651, 109.28666390959748'
        ]);

        // 3
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Batang',
            'alamat' => 'Kalisari Jl. Dr.Sutomo No.28, Kauman, Kec. Batang, Kabupaten Batang, Jawa Tengah 51216',
            'telp' => '(0285) 4493058',
            'email' => 'udd_kabbatang@pmi.or.id',
            'titik_koordinat' => '-6.910697597530094, 109.71916596441805'
        ]);

        // 4
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Blora',
            'alamat' => 'Jl. Dr. Sutomo No.42, Blora, Tempelan, Kec. Blora, Kabupaten Blora, Jawa Tengah 58211',
            'telp' => '(0296) 533437',
            'email' => 'udd_kabblora@pmi.or.id',
            'titik_koordinat' => '-6.967386693747123, 111.41941867912365'
        ]);

        // 5
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Boyolali',
            'alamat' => 'Komplek Randu Asri Jl. Kates Ngebong, Koplak, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311',
            'telp' => '(0276) 321104',
            'email' => 'kab_boyolali@pmi.or.id',
            'titik_koordinat' => '-7.537795165954828, 110.60094630789011'
        ]);

        // 6
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Brebes',
            'alamat' => 'Jalan Kaligangsa Raya No. 62 Kaligangsa, Kaligangsa Kulon, Kec. Brebes, Kabupaten Brebes, Jawa Tengah 52217',
            'telp' => '(0283) 671820',
            'email' => 'udd_kabbrebes@pmi.or.id',
            'titik_koordinat' => '-6.8770283893687285, 109.06864953190711'
        ]);

        // 7
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Cilacap',
            'alamat' => 'Jl. Urip Sumoharjo No.174A, Cilumpang, Gumilir, Kec. Cilacap Utara, Kabupaten Cilacap, Jawa Tengah 53274',
            'telp' => '(0282) 542201',
            'email' => 'udd_kabcilacap@pmi.or.id',
            'titik_koordinat' => '-7.680573348419633, 109.05043307126535'
        ]);

        // 8
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Demak',
            'alamat' => 'Jl. Bhayangkara No.3, Bogorame, Bintoro, Kec. Demak, Kabupaten Demak, Jawa Tengah 59511',
            'telp' => '(0291) 685307',
            'email' => 'udd_kabdemak@pmi.or.id',
            'titik_koordinat' => '-6.897729139547275, 110.63466579510752'
        ]);

        // 9
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Grobogan',
            'alamat' => 'Jl. Piere Tendean No.5 A, Purwodadi, Kec. Purwodadi, Kabupaten Grobogan, Jawa Tengah 58111',
            'telp' => '(0292) 421220',
            'email' => 'kab_grobogan@pmi.or.id',
            'titik_koordinat' => '-7.084641912135868, 110.91911221812741'
        ]);

        // 10
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Jepara',
            'alamat' => 'Mulyoharjo III, Mulyoharjo, Kec. Jepara, Kabupaten Jepara, Jawa Tengah 59431',
            'telp' => '(0291) 591342',
            'email' => 'udd_kabjepara@pmi.or.id',
            'titik_koordinat' => '-6.586418854434088, 110.68614830879457'
        ]);

        // 11
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Karanganyar',
            'alamat' => 'Jl. Lawu No.167, Tegalgede, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57714',
            'telp' => '(0271) 495139',
            'email' => 'udd_kabkaranganyar@pmi.or.id',
            'titik_koordinat' => '-7.5994028885954785, 110.95907249326473'
        ]);

        // 12
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Kebumen',
            'alamat' => 'Jl. Arumbinang No.18, Dukuh, Kebumen, Kec. Kebumen, Kabupaten Kebumen, Jawa Tengah 54311',
            'telp' => '(0287) 381818',
            'email' => 'udd_kabkebumen@pmi.or.id',
            'titik_koordinat' => '-7.668525883685174, 109.66301141178418'
        ]);

        // 13
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Kendal',
            'alamat' => 'Sukup Kulon, Purwokerto, Kec. Patebon, Kabupaten Kendal, Jawa Tengah 51314',
            'telp' => '(0294) 381139',
            'email' => 'udd_kabkendal@pmi.or.id',
            'titik_koordinat' => '-6.921918039886818, 110.18202248161637'
        ]);

        // 14
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Klaten',
            'alamat' => 'Jl. Veteran No.80, Ngilas Kidul, Bareng Lor, Kec. Klaten Utara, Kabupaten Klaten, Jawa Tengah 57414',
            'telp' => '(0272) 324473',
            'email' => 'uddklaten@yahoo.co.id',
            'titik_koordinat' => '-7.694354664392907, 110.60986227779095'
        ]);

        // 15
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Kudus',
            'alamat' => 'Jl. Kudus - Purwodadi, Pejaten, Jati Kulon, Kec. Jati, Kabupaten Kudus, Jawa Tengah 59346',
            'telp' => '(0291) 445689',
            'email' => 'kab_kudus@pmi.or.id',
            'titik_koordinat' => '-6.830051616488293, 110.831988735302'
        ]);

        // 16
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Magelang',
            'alamat' => 'Jl. Kartini No.26, Balemulyo, Muntilan, Kec. Muntilan, Kabupaten Magelang, Jawa Tengah 56411',
            'telp' => '(0293) 587396',
            'email' => 'udd_kabmagelang@pmi.or.id',
            'titik_koordinat' => '-7.583617599999861, 110.29023712944866'
        ]);

        // 17
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Pati',
            'alamat' => 'Jl. Dr. Susanto Jl. Kunden Raya No.101, Ngipik, Kutoharjo, Kec. Pati, Kabupaten Pati, Jawa Tengah 59118',
            'telp' => '(0295) 381178',
            'email' => 'uddpmipati@gmail.com',
            'titik_koordinat' => '-6.739466903741371, 111.04249065260953'
        ]);

        // 18
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Pekalongan',
            'alamat' => 'Mlatensatu, Karangsari, Kec. Karanganyar, Kabupaten Pekalongan, Jawa Tengah 51182',
            'telp' => '(0285) 385303',
            'email' => 'kab_pekalongan@pmi.or.id',
            'titik_koordinat' => '-7.031982014434459, 109.61581363255651'
        ]);

        // 19
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Pemalang',
            'alamat' => 'Jl. Gatot Subroto No.78, Bojongbata, Kec. Pemalang, Kabupaten Pemalang, Jawa Tengah 52312',
            'telp' => '(0284) 321431',
            'email' => 'udd_kabpemalang@pmi.or.id',
            'titik_koordinat' => '-6.911719858406652, 109.38289478139869'
        ]);

        // 20
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Purbalingga',
            'alamat' => 'Jl. Tentara Pelajar (Sebelah timur RSUD dr.Goeteng TB, Purbalingga, Kembaran Kulon, Kec. Purbalingga, Kabupaten Purbalingga, Jawa Tengah 53319',
            'telp' => '(0281) 891961',
            'email' => 'udd_kabpurbalingga@pmi.or.id',
            'titik_koordinat' => '-7.377882632631137, 109.36242439511466'
        ]);

        // 21
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Purworejo',
            'alamat' => 'Jl. Pemuda No.24, 54111, Purworejo, Kec. Purworejo, Kabupaten Purworejo, Jawa Tengah 54151',
            'telp' => '(0275) 321348',
            'email' => 'udd_kabpurworejo@pmi.or.id',
            'titik_koordinat' => '-7.711212743880177, 110.01300017423367'
        ]);

        // 22
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Rembang',
            'alamat' => 'Jl. Pangeran Diponegoro No.99, Kutoharjo, Kec. Rembang, Kabupaten Rembang, Jawa Tengah 59211',
            'telp' => '(0295) 691335',
            'email' => 'udd_kabrembang@pmi.or.id',
            'titik_koordinat' => '-6.705011888872068, 111.34572595939464'
        ]);

        // 23
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Semarang',
            'alamat' => 'Jl. Gatot Subroto No.96, Cirebonan, Bandarjo, Kec. Ungaran Barat, Kabupaten Semarang, Jawa Tengah 50517',
            'telp' => '(024) 76902606',
            'email' => 'udd_kabsemarang@pmi.or.id',
            'titik_koordinat' => '-7.121063944003993, 110.4091542849427'
        ]);

        // 24
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Sragen',
            'alamat' => 'Jl. Sukowati No.524D, Ngrandu, Sragen Wetan, Kec. Sragen, Kabupaten Sragen, Jawa Tengah 57215',
            'telp' => '(0271) 891587',
            'email' => 'kab_sragen@pmi.or.id',
            'titik_koordinat' => '-7.417858291881373, 111.03953258853397'
        ]);

        // 25
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Sukoharjo',
            'alamat' => 'Jl. Rajawali, Mlangsen, RT.1/RW.6, Joho, Kabupaten Sukoharjo, Jawa Tengah 57513',
            'telp' => '(0271) 593157',
            'email' => 'udd_kabsukoharjo@pmi.or.id',
            'titik_koordinat' => '-7.693319184037873, 110.83673633827087'
        ]);

        // 26
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Tegal',
            'alamat' => 'Jl. Gajah Mada, Prenam, Dukuhwringin, Kec. Slawi, Kabupaten Tegal, Jawa Tengah 52419',
            'telp' => '(0283) 4561201	',
            'email' => 'kab_tegal@pmi.or.id',
            'titik_koordinat' => '-6.9928556067159215, 109.12676646916796'
        ]);

        // 27
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Temanggung',
            'alamat' => 'Jl. Dr. Wahidin No.8, Temanggung Lor, Temanggung II, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56213',
            'telp' => '(0293) 492195',
            'email' => 'udd_kabtemanggung@pmi.or.id',
            'titik_koordinat' => '-7.313563068400191, 110.17572292878056'
        ]);

        // 28
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Wonogiri',
            'alamat' => 'Jend. Gatot Subroto No.22, Wonokarto Tengah, Wonokarto, Kec. Wonogiri, Kabupaten Wonogiri, Jawa Tengah 57612',
            'telp' => '(0273) 321123',
            'email' => 'udd_kabwonogiri@pmi.or.id',
            'titik_koordinat' => '-7.801499236432355, 110.91513618214195'
        ]);

        // 29
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Wonosobo',
            'alamat' => 'Jalan Soepardjo Rustam, Rw. 6, Andongsili, Kec. Mojotengah, Kabupaten Wonosobo, Jawa Tengah 56351',
            'telp' => '(0286) 321315',
            'email' => 'udd_kabwonosobo@pmi.or.id',
            'titik_koordinat' => '-7.326987298700975, 109.91707825118648'
        ]);

        // 30
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Magelang',
            'alamat' => 'Jl. Beringin I No.1, Tidar Utara, Kec. Magelang Sel., Kota Magelang, Jawa Tengah 56125',
            'telp' => '(0293) 364087',
            'email' => 'uddpmimagelang@gmail.com',
            'titik_koordinat' => '-7.4874404067926355, 110.22767385150189'
        ]);

        // 31
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Pekalongan',
            'alamat' => 'Jl. Veteran No.27, Kraton Lor, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51145',
            'telp' => '(0285) 421580',
            'email' => 'udd_kotapekalongan@pmi.or.id',
            'titik_koordinat' => '-6.880617124932329, 109.66773465741106'
        ]);

        // 32
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Salatiga',
            'alamat' => 'Jl. Osamaliki No.20, Mangunsari, Kec. Sidomukti, Kota Salatiga, Jawa Tengah 50721',
            'telp' => '(0298) 315916',
            'email' => 'utdpmisalatiga@gmail.com',
            'titik_koordinat' => '-7.32662942953515, 110.49493540475828'
        ]);

        // 33
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Semarang',
            'alamat' => 'Jl. Mgr Sugiyopranoto No.31, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131',
            'telp' => '(024) 3515050',
            'email' => 'uddpmismg@yahoo.com',
            'titik_koordinat' => '-6.982331562167663, 110.40586901758185'
        ]);

        // 34
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Surakarta',
            'alamat' => 'Jl. Kolonel Sutarto No.58, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126',
            'telp' => '(0271) 646505',
            'email' => 'kota_surakarta@pmi.or.id',
            'titik_koordinat' => '-7.559760021456994, 110.8430927067964'
        ]);

        // 35
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Tegal',
            'alamat' => 'Jalan Aiptu KS. Tubun No. 8, Randugunti, Tegal Selatan, Kejambon, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52131',
            'telp' => '(0283) 343244',
            'email' => 'udd_kotategal@pmi.or.id',
            'titik_koordinat' => '-6.885167393206266, 109.13380195851387'
        ]);

        // 36
        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Provinsi Jawa Tengah ',
            'alamat' => 'Jl. Arum Sari Raya, RT.11/RW.02, Sambiroto, Kec. Tembalang, Kota Semarang, Jawa Tengah 59111',
            'telp' => '(024) 76746733',
            'email' => 'udd_jawatengah@pmi.or.id',
            'titik_koordinat' => '-7.029839877036103, 110.4565791420833'
        ]);
    }
}
