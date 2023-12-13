<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UDD PMI Jawa Tengah</title>
    
    {{-- Style --}}
    <link rel="stylesheet" href="css/landing.css">

    {{-- Bootstrap 5.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    {{-- GFont --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    {{-- Icons Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    {{-- Feather Icons --}}
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    
    @include('v_landing.layouts.partials.navbar')

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
    
    <section id="about" class="about pb-5">

      <div class="container_ d-flex">

        <div class="pic_ position-relative">
          <img src="/img/donordarah.png" width="550">
        </div>

        <div class="text_">
          <div class="" style="font-size: 0.8em">
            <p><span class="fw-bold" style="color: #e60000">UDD PMI Provinsi Jawa Tengah</span> merupakan pusat upaya penyediaan darah yang terletak di Jalan Arumsari RT. 11 RW. 02 Sambiroto, Semarang. UDD PMI Provinsi Jawa Tengah mendorong partisipasi aktif masyarakat dalam kegiatan donor darah, memastikan pasokan mencukupi untuk kebutuhan medis.</p>
            <p>Donor darah di UDD PMI Provinsi Jawa Tengah menjadi kegiatan yang mendukung ketersediaan darah di wilayah Jawa Tengah. Melalui proses donor, masyarakat dapat berkontribusi langsung dalam menyelamatkan nyawa dan meningkatkan kesehatan komunitas sekitar.</p>
          </div>
        </div>

      </div>

    </section>

    <section>
      <div class="" style="background-color: rgba(230, 0, 0, 0.8)">
        
      </div>
    </section>

    {{-- <section id="jadwalmu">
      
      @yield('jadwalmu')
      
    </section>

    <section id="stokdarah">

      @yield('stokdarah')

    </section>

    <section id="alamatudd">

      @yield('alamatudd')
    
    </section> --}}
    



    <script>
      feather.replace();
    </script>
    <script src="js/landing.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>