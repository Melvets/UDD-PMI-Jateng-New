<div class="sidebar-heading mb-3">
  <div class="d-flex justify-content-start align-items-center rounded py-1 px-2 ms-2" style="background-color: #cc0000">
    <img src="/img/user/default.jpg" class="rounded-circle" width="50">
    <div class="ps-2 text-white">
      <p class="mb-0 fw-bold" style="line-height: 1rem">{{ auth()->user()->name }}</p>
      <p class="mb-0 text-uppercase" style="font-size: 0.7em;">{{ auth()->user()->AlamatUDD->udd_kabkot }}</p>
    </div>
  </div>
</div>

<hr class="mt-0 mb-0 ms-2">
{{-- ======================================================================== --}}

<li class="side-link_ nav-item mt-3">
    <a class="nav-link {{ Request::is('dashboard') ? 'active-side' : '' }}" href="/dashboard" >
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
      </span>
      <span class="side-link-title_ nav-link-title">
       Home
      </span>
    </a>
</li>

<li class="side-link_ nav-item">
    <a class="nav-link {{ Request::is('dashboard/user') ? 'active-side' : '' }}" href="/dashboard" >
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
      </span>
      <span class="side-link-title_ nav-link-title">
       Profile
      </span>
    </a>
</li>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-0 text-uppercase" style="color: gray">
  <span>Umum</span>
</h6>


<li class="side-link_ nav-item">
    <a class="nav-link {{ Request::is('dashboard/alamatudd*') ? 'active-side' : '' }}" href="/dashboard/alamatudd">
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 18.5l-3 -1.5l-6 3v-13l6 -3l6 3l6 -3v7.5" /><path d="M9 4v13" /><path d="M15 7v5.5" /><path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" /><path d="M19 18v.01" /></svg>
      </span>
      <span class="side-link-title_ nav-link-title">
        Alamat UDD
      </span>
    </a>
</li>

<li class="side-link_ nav-item">
    <a class="nav-link {{ Request::is('dashboard/stokdarah*') ? 'active-side' : '' }}" href="/dashboard/stokdarah">
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet-half-2-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13.905 2.923l.098 .135l4.92 7.306a7.566 7.566 0 0 1 1.043 3.167l.024 .326c.007 .047 .01 .094 .01 .143l-.002 .06c.056 2.3 -.944 4.582 -2.87 6.14c-2.969 2.402 -7.286 2.402 -10.255 0c-1.904 -1.54 -2.904 -3.787 -2.865 -6.071a1.052 1.052 0 0 1 .013 -.333a7.66 7.66 0 0 1 .913 -3.176l.172 -.302l4.893 -7.26c.185 -.275 .426 -.509 .709 -.686c1.055 -.66 2.446 -.413 3.197 .55zm-2.06 1.107l-.077 .038l-.041 .03l-.037 .036l-.033 .042l-4.863 7.214a5.607 5.607 0 0 0 -.651 1.61h11.723a5.444 5.444 0 0 0 -.49 -1.313l-.141 -.251l-4.891 -7.261a.428 .428 0 0 0 -.5 -.145z" stroke-width="0" fill="currentColor" /></svg>
      </span>
      <span class=" side-link-title_ nav-link-title">
        Stok Darah
      </span>
    </a>
</li>

<li class="side-link_ nav-item">
    <a class="nav-link {{ Request::is('dashboard/jadwalmu*') ? 'active-side' : '' }}" href="/dashboard/jadwalmu">
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-stats" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" /><path d="M18 14v4h4" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" /><path d="M3 11h16" /></svg>
      </span>
      <span class=" side-link-title_ nav-link-title">
        Jadwal Mobile Unit
      </span>
    </a>
</li>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-0 text-uppercase" style="color: gray">
  <span>Media</span>
</h6>

<li class="side-link_ nav-item">
  <a class="nav-link {{ Request::is('dashboard/jadwalmu*') ? 'active-side' : '' }}" href="/dashboard/jadwalmu">
    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-stats" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" /><path d="M18 14v4h4" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" /><path d="M3 11h16" /></svg>
    </span>
    <span class=" side-link-title_ nav-link-title">
      Media & Publikasi
    </span>
  </a>
</li>

@can('admin')

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-0 text-uppercase" style="color: gray">
    <span>Administrator</span>
</h6>

<li class="side-link_ nav-item">
    <a class="nav-link {{ Request::is('dashboard/jadwalmu*') ? 'active-side' : '' }}" href="/dashboard/jadwalmu">
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-stats" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" /><path d="M18 14v4h4" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" /><path d="M3 11h16" /></svg>
      </span>
      <span class=" side-link-title_ nav-link-title">
        Buat Akun
      </span>
    </a>
  </li>

@endcan
