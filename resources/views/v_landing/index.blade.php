@extends('v_landing.layouts.main')

@section('container')
    
  <section id="home">

    <div class="parallax"></div>

    <div class="card position-absolute top-40 start-50 translate-middle px-5" style="border-color: #e60000; border-width: 2px">
      <div class="card-body text-center">
        <p class="card-text fs-1 fw-bold pb-0 mb-0">UDD PMI JAWA TENGAH</p>
        <h6 class="text-secondary" style="font-size: 0.8em">Teteskan <span class="text-decoration-underline" style="color: #e60000">darah kini,</span> untuk mereka yang <span class="text-decoration-underline" style="color: #e60000">membutuhkan nanti.</span></h6>
      </div>
    </div>

    <div class="" style="height:150px; background-color: #fafafa;">
        
    </div>

  </section>
  
  {{-- ========================== ABOUT ========================== --}}

  <section id="about" class="about" style="padding: 0 15% 2rem 15%">

    <p class="fw-bold ps-2" style="font-size: 25px; border-left: solid 4px #e60000">Tentang <span style="color: #e60000">UDD PMI Jawa Tengah</span></p>

    <div class="container_ d-flex">

      <div class="pic_ position-relative">
        <img src="/img/donordarah.png" width="550">
      </div>

      <div class="text_">
        <div class="" style="font-size: 0.8em">
          <p><span class="fw-bold" style="color: #e60000">UDD PMI Provinsi Jawa Tengah</span> merupakan pusat upaya penyediaan darah yang terletak di Jalan Arumsari RT. 11 RW. 02 Sambiroto, Semarang. </p>
          <p>Donor darah menjadi kegiatan yang mendukung ketersediaan darah di wilayah Jawa Tengah. Melalui proses donor, masyarakat dapat berkontribusi langsung dalam menyelamatkan nyawa dan meningkatkan kesehatan komunitas sekitar untuk mencukupi kebutuhan medis.</p>
        </div>
      </div>

    </div>

  </section>

  {{-- ========================== INFORMASI 1 ========================== --}}

  <section class="informasi1_" style="padding: 2rem 0">
    <div class="container_">
      <img src="/img/dd-ilustrasiTanya.png" width="150">
      <div class="text_">
        <p>Mau donor darah tapi bingung di mana? <br> Cek jadwal kotamu di bawah ini! </p>
      </div>
      <div class="icon_">
        <button class="btn fw-bold px-3 py-2" style="background-color: #e60000; color: #FAFAFA; font-size: 0.8em">Jadwal MU <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg></button>
      </div>
    </div>
  </section>

  {{-- ========================== JADWAL MU ========================== --}}

  <section class="jadwalmu_" style="padding: 2rem 15%">
    <div class="container">

      <h2 class="fw-bold fs-2 text-center"> JADWAL <span style="color: #e60000">MOBILE UNIT</span> </h2>
      <h6 class="text-center mb-4" style="font-size: 0.8em;">Jadwal Donor Mobile Unit UDD h6MI Se Jateng (Tanggal 16-June-2023)</h6>
  
      <div class="d-flex" style="flex-wrap: wrap; justify-content: center; ">
      
        @for ($i = 0; $i < 8 ; $i++)
        <div class="card my-2" style="width: 13.5rem; font-size:0.8em; margin: 0 7px">
          <div class="card-header fw-bold text-white" style="background-color: #e60000">UDD PMI Kota Semarang</div>
          <div class="card-body">
            <div class="text-secondary mb-1"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled mb-1" width="13" height="13" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" /></svg><span class="ps-1" style="font-size: 0.7em">Kota Semarang</span></div>
            <p class="fw-bold mb-2" style="font-size: 1.4em; line-height: 20px">SMK Negeri 2 Semarang</p>
            <p class="mb-2" style="font-size: 0.7em">Jalan Dokter Cipto No.121A, Karangturi, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50124</p>
            <div class="d-flex pb-0" style="font-size: 0.9em">
              <p class="border" style="padding: 1px 5px">09:00</p> <p style="padding: 1px 5px">-</p> <p class="border" style="padding: 1px 5px">10:00</p>
            </div>
            <p class="fw-bold mt-0" style="font-size: 0.9em">Internal</p>
          </div>
        </div>
        @endfor

      </div>

      <a href="" class="text-decoration-none">
        <div class="d-flex justify-content-end fw-bold" style="font-size: 0.8em"><p class="pe-1" style="padding-top: 2px; color: #252525">Lihat lainnya</p><svg style="color: #e60000" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="#E60000" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg></div>
      </a>

    </div>
  </section>

  {{-- ========================== SYARAT DD ========================== --}}

  <section class="syaratdd_" style="padding: 2rem 15%">

    <p class="fw-bold ps-2" style="font-size: 25px; border-left: solid 4px #e60000">Ketentuan <span style="color: #e60000">Donor Darah</span></p>

    <div class="d-flex" style="flex-wrap: wrap; justify-content: space-between">

      <div class="card py-2" style="width: 19.3rem;">
        <div class="card-body">
          <h5 class="card-title text-center fw-bold pb-3" style="border-bottom: #e60000 solid 2px"><span class="">Syarat Donor Darah</span></h5>

          <div class="row pt-3">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-check" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg> </div>
            <div class="col" style="font-size: 0.8em">Kondisi fisik harus dalam keadaan sehat, jasmani maupun rohani.</div>
          </div>
          <div class="row pt-1">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-check" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg> </div>
            <div class="col" style="font-size: 0.8em">Usia 17-60 tahun (usia 17 tahun diperbolehkan menjadi donor bila mendapat izin tertulis dari orangtua)</div>
          </div>
          <div class="row pt-1">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-check" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg> </div>
            <div class="col" style="font-size: 0.8em">Memiliki berat badan minimal 45 Kg.</div>
          </div>
          <div class="row pt-1">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-check" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg> </div>
            <div class="col" style="font-size: 0.8em">Suhu tubuh 36,6 -37,5 derajat Celcius.</div>
          </div>
          <div class="row pt-1">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-check" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg> </div>
            <div class="col" style="font-size: 0.8em">Tekanan darah harus berada di angka 100-160 untuk sistolik dan 70-100 untuk diastolik.</div>
          </div>
          <div class="row pt-1">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-check" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg> </div>
            <div class="col" style="font-size: 0.8em">Saat pemeriksaan, denyut nadi harus sekitar 50-100 kali per menit.</div>
          </div>
          <div class="row pt-1">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-check" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg> </div>
            <div class="col" style="font-size: 0.8em">Kadar hemoglobin minimal 12 gr/dl untuk wanita, dan minimal 12,5 gr/dl untuk pria.</div>
          </div>
          <div class="row pt-1">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-check" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg> </div>
            <div class="col" style="font-size: 0.8em">Jumlah penyumbangan per tahun paling banyak 5 kali dengan jarak penyumbangan sekurang-kurangnya 3 bulan.</div>
          </div>

        </div>
      </div>

      <div class="card py-2" style="width: 19.3rem;">
        <div class="card-body">
          <h5 class="card-title text-center fw-bold pb-3" style="border-bottom: #e60000 solid 2px"><span class="">Dilarang Donor Jika</span></h5>

          <div class="row pt-3">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Mempunyai penyakit jantung dan paru-paru.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em;">Menderita kanker.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Menderita tekanan darah tinggi (hipertensi).</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Menderita kencing manis (diabetes militus)</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Memiliki kecenderungan perdarahan abnormal atau kelainan darah lainnya.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Menderita epilepsi dan sering kejang.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Menderita atau pernah menderita Hepatitis B atau C.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Mengidap sifilis.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Ketergantungan narkoba dan kecanduan minuman beralkohol.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Mengidap atau beresiko tinggi terhadap HIV/AIDS.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-x" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cc0000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg></div>
            <div class="col" style="font-size: 0.8em">Dokter menyarankan untuk tidak menyumbangkan darah karena alasan kesehatan.</div>
          </div>

        </div>  
      </div>

      <div class="card py-2" style="width: 19.3rem;">
        <div class="card-body">
          <h5 class="card-title text-center fw-bold pb-3" style="border-bottom: #e60000 solid 2px"><span class="">Sebelum & Sesudah Donor</span></h5>

          <div class="row pt-3">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-chevrons-up" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#d6de00" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l3 -3l3 3" /><path d="M9 11l3 -3l3 3" /><path d="M12 21a9 9 0 1 0 -.265 0l.265 0z" /></svg></div>
            <div class="col" style="font-size: 0.8em">Tidur minimal 4 jam sebelum donor.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-chevrons-up" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#d6de00" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l3 -3l3 3" /><path d="M9 11l3 -3l3 3" /><path d="M12 21a9 9 0 1 0 -.265 0l.265 0z" /></svg></div>
            <div class="col" style="font-size: 0.8em">Makanlah 3 – 4 jam sebelum menyumbangkan darah. Jangan menyumbangkan darah dengan perut kosong.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-chevrons-up" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#d6de00" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l3 -3l3 3" /><path d="M9 11l3 -3l3 3" /><path d="M12 21a9 9 0 1 0 -.265 0l.265 0z" /></svg></div>
            <div class="col" style="font-size: 0.8em">Minum lebih banyak dari biasanya pada hari mendonorkan darah (paling sedikit 3 gelas).</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-chevrons-up" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#d6de00" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l3 -3l3 3" /><path d="M9 11l3 -3l3 3" /><path d="M12 21a9 9 0 1 0 -.265 0l.265 0z" /></svg></div>
            <div class="col" style="font-size: 0.8em">Setelah donor beristirahat paling sedikit 10 menit sambil menikmati makanan donor, sebelum kembali beraktivitas.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-chevrons-up" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#d6de00" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l3 -3l3 3" /><path d="M9 11l3 -3l3 3" /><path d="M12 21a9 9 0 1 0 -.265 0l.265 0z" /></svg></div>
            <div class="col" style="font-size: 0.8em">Kembali bekerja setelah donor darah tidak berbahaya untuk kesehatan.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-chevrons-up" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#d6de00" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l3 -3l3 3" /><path d="M9 11l3 -3l3 3" /><path d="M12 21a9 9 0 1 0 -.265 0l.265 0z" /></svg></div>
            <div class="col" style="font-size: 0.8em">Untuk menghindari bengkak di lokasi bekas jarum, hindari mengangkat benda berat selama 12 jam.</div>
          </div>
          <div class="row">
            <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 1.5rem" class="icon icon-tabler icon-tabler-circle-chevrons-up" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#d6de00" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l3 -3l3 3" /><path d="M9 11l3 -3l3 3" /><path d="M12 21a9 9 0 1 0 -.265 0l.265 0z" /></svg></div>
            <div class="col" style="font-size: 0.8em">Banyak minum sampai 72 jam ke depan untuk mengembalikan stamina.</div>
          </div>

        </div>
      </div>

    </div>

  </section>

  {{-- ========================== PENDONOR ========================== --}}

  <section class="pendonor_" style="padding: 2rem 0">

    <div class="" style="padding: 2rem 15%; background-color: #ffb6b6">
      <div class="text-center pb-4">
        <p class="fw-bold m-0" style="font-size: 30px">Pendonor</p>
        <p class="fw-bold" style="font-size: 15px; color: #e60000">Apa Kata Mereka</p>
      </div>

      <div class="d-flex" style="justify-content: space-evenly">
        <div class="">
          <div class="text-center">
            <img src="/img/user/default.jpg" class="rounded-circle" style="border: #e60000 solid 2px;" width="200">
          </div>
          <div class="text-center mt-2">
            <p class="fw-bold mb-0" style="font-size: 18px">Budiyanto</p>
            <p class="mb-2" style="font-size: 15px">Pendonor Ke - 50 X</p>
            <p style="font-size: 0.8em; width: 290px;">"Alhamdulillah selama jadi pendonor, badan sehat moga bermanfaat bagi masyarakat yg membutuhkan."</p>
          </div>
        </div>
        <div class="">
          <div class="text-center">
            <img src="/img/user/default.jpg" class="rounded-circle" style="border: #e60000 solid 2px;" width="200">
          </div>
          <div class="text-center mt-2">
            <p class="fw-bold mb-0" style="font-size: 18px">Budiyanto</p>
            <p class="mb-2" style="font-size: 15px">Pendonor Ke - 50 X</p>
            <p style="font-size: 0.8em; width: 290px;">"Alhamdulillah selama jadi pendonor, badan sehat moga bermanfaat bagi masyarakat yg membutuhkan."</p>
          </div>
        </div>
        <div class="">
          <div class="text-center">
            <img src="/img/user/default.jpg" class="rounded-circle" style="border: #e60000 solid 2px;" width="200">
          </div>
          <div class="text-center mt-2">
            <p class="fw-bold mb-0" style="font-size: 18px">Budiyanto</p>
            <p class="mb-2" style="font-size: 15px">Pendonor Ke - 50 X</p>
            <p style="font-size: 0.8em; width: 290px;">"Alhamdulillah selama jadi pendonor, badan sehat moga bermanfaat bagi masyarakat yg membutuhkan."</p>
          </div>
        </div>
        
      </div>
    </div>

  </section>

  {{-- ========================== MEDIA & PUBLIKASI ========================== --}}

  <section class="blog_" style="padding: 2rem 15%">

    <p class="fw-bold ps-2" style="font-size: 25px; border-left: solid 4px #e60000">Media & Publikasi<span style="color: #e60000"></span></p>

    <div class="d-flex mb-2" style="flex-wrap: wrap; justify-content: space-between;">
      
      <div class="card" style="width: 19rem;">
        <img src="/img/user/blank-image.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="font-size: 12px">
          <a href="#" class="card-title fw-bold mb-0 text-decoration-none text-reset" style="font-size: 18px">Dolorum iure officia quisquam possimus dolorum</a>
          <p class="text-secondary mb-1">By <a href="#" class="text-decoration-none" style="color: #e60000">Admin</a> 39 seconds ago</p>
          <p class="card-text mb-0" style="text-align: justify;">Quasi sunt aliquam ut. Voluptatem eveniet illum et molestiae molestiae. Rerum et ab totam vel facilis mollitia maiores.</p>
        </div>
      </div>
      <div class="card" style="width: 19rem;">
        <img src="/img/user/blank-image.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="font-size: 12px">
          <a href="#" class="card-title fw-bold mb-0 text-decoration-none text-reset" style="font-size: 18px">Dolorum iure officia quisquam possimus dolorum</a>
          <p class="text-secondary mb-1">By <a href="#" class="text-decoration-none" style="color: #e60000">Admin</a> 39 seconds ago</p>
          <p class="card-text mb-0" style="text-align: justify;">Quasi sunt aliquam ut. Voluptatem eveniet illum et molestiae molestiae. Rerum et ab totam vel facilis mollitia maiores.</p>
        </div>
      </div>
      <div class="card" style="width: 19rem;">
        <img src="/img/user/blank-image.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="font-size: 12px">
          <a href="#" class="card-title fw-bold mb-0 text-decoration-none text-reset" style="font-size: 18px">Dolorum iure officia quisquam possimus dolorum</a>
          <p class="text-secondary mb-1">By <a href="#" class="text-decoration-none" style="color: #e60000">Admin</a> 39 seconds ago</p>
          <p class="card-text mb-0" style="text-align: justify;">Quasi sunt aliquam ut. Voluptatem eveniet illum et molestiae molestiae. Rerum et ab totam vel facilis mollitia maiores.</p>
        </div>
      </div>
    
    </div>
    <a href="" class="text-decoration-none">
      <div class="d-flex justify-content-end fw-bold" style="font-size: 0.8em"><p class="pe-1" style="padding-top: 2px; color: #252525">Lihat lainnya</p><svg style="color: #e60000" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="#E60000" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg></div>
    </a>

  </section>

  {{-- ========================== FOOTER ========================== --}}

  <section class="footer_" style="padding: 2rem 0 0 0">

    <div class="" style="background-color: #CC0000; padding: 2rem 15%">

      <div class="d-flex" style="flex-wrap: wrap; justify-content: space-between;">
      
        <div class="text-white" style="font-size: 12px">
          <p class="fw-bold mb-0" style="font-size: 18px">UDD PMI Jawa Tengah</p>
          <p class="mb-2" style="width: 345px">Jalan Arum Sari Raya, RT. 11 RW. 02, Sambiroto, Kec. Tembalang, Kota Semarang, Jawa Tengah 59111</p>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
            <p class="ps-2 mb-2 pt-1">(024) 76746733</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor" /><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor" /></svg>
            <p class="ps-2 mb-2 pt-1">udd_jawatengah@pmi.or.id</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M3.6 9h16.8" /><path d="M3.6 15h16.8" /><path d="M11.5 3a17 17 0 0 0 0 18" /><path d="M12.5 3a17 17 0 0 1 0 18" /></svg>
            <p class="ps-2 mb-2 pt-1">https://www.udd.pmi-jateng.or.id/</p>
          </div>
        </div>
        <div class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8204946731566!2d110.45164058885499!3d-7.0303741999999945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708dd72fedc661%3A0xcd7dd2a390a9004!2sIndonesian%20Red%20Cross%20Region%20Central%20Java!5e0!3m2!1sen!2sid!4v1702999305546!5m2!1sen!2sid" width="550" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>

    </div>
    
    <div class="" style="background-color: #A90000; padding: 0.5rem 15%;">

      <div class="d-flex text-white" style="flex-wrap: wrap; justify-content: space-between; align-items: center">
      
        <div class="">
          <p class="mb-0" style="font-size: 12px;">Copyright © PMI Jawa Tengah 2023</p>
        </div>
        <div class="d-flex">
          <a href="" class="iconf_ mx-1">
            <div class="rounded-circle position-relative" style="width: 31px; height: 31px;">
              <img src="/img/icon/youtube.svg" class="position-absolute top-50 start-50 translate-middle">
            </div>
          </a>
          <a href="" class="iconf_ mx-1">
            <div class="rounded-circle position-relative" style="width: 31px; height: 31px;">
              <img src="/img/icon/brand-instagram.svg" class="position-absolute top-50 start-50 translate-middle">
            </div>
          </a>
          <a href="" class="iconf_ mx-1">
            <div class="rounded-circle position-relative" style="width: 31px; height: 31px;">
              <img src="/img/icon/brand-twitter-filled.svg" class="position-absolute top-50 start-50 translate-middle">
            </div>
          </a>
          <a href="" class="iconf_ mx-1">
            <div class="rounded-circle position-relative" style="width: 31px; height: 31px;">
              <img src="/img/icon/brand-facebook-filled.svg" class="position-absolute top-50 start-50 translate-middle">  
            </div>
          </a>
        </div>
        <div class="d-flex" style="font-size: 12px">
          <a href="#" class="text-decoration-none text-white mb-0 mx-1">Privacy Policy</a>
          <a href="#" class="text-decoration-none text-white mb-0 mx-1">Terms of Use</a>
        </div>

      </div>

    </div>

  </section>

@endsection