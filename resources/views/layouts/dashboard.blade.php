@extends('layouts.template')

@section('content')
  <!-- Right side columns -->
  <div class="col-lg-5">
    <!-- Card with an image on left -->
    <div class="card">
      <div class="row g-0">
        <div class="col-md-5">
          <img src="{{ url('/dashboard/assets/img/people.png') }}" class="img-fluid rounded-start" alt="people"
            height="100">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h4 class="card-title">Hi, {{ Auth::user()->name }}! 🎉</h4>
            <p class="card-text">Selamat Datang di Website Pengelolaan Data Warga.</p>
          </div>
        </div>
      </div>
    </div><!-- End Card with an image on left -->

  </div><!-- End Right side columns -->



  <!-- Left side columns -->
  <div class="col-lg-7">
    <div class="row">

      <!-- Warga Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Keterangan</h6>
              </li>

              <li><a class="dropdown-item" href="/warga">Detail Warga</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">WARGA </h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person-fill"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $warga }}</h6> <span class="text-muted small pt-2 ps-1">Orang</span>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Warga Card -->

      <!-- Revenue Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Keterangan</h6>
              </li>

              <li><a class="dropdown-item" href="/kartukeluarga">Detail Kartu Keluarga</a></li>
          </div>

          <div class="card-body">
            <h5 class="card-title">KARTU KELUARGA</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people-fill"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $kk }}</h6> <span class="text-muted small pt-2 ps-1">KK</span>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Revenue Card -->

      <!-- Pendatang Card -->
      <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Keterangan</h6>
              </li>

              <li><a class="dropdown-item" href="/pendatang">Detail Pendatang</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Pendatang</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $pendatang }}</h6> <span class="text-muted small pt-2 ps-1">Orang</span>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Pendatang Card -->

      <!-- pindah Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card pindah-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Keterangan</h6>
              </li>

              <li><a class="dropdown-item" href="/pindah">Detail Pindah</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Pindah</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person-dash-fill"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $pindah }}</h6> <span class="text-muted small pt-2 ps-1">Orang</span>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End pindah Card -->

      <!-- Kelahiran Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card kelahiran-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Keterangan</h6>
              </li>
              <li><a class="dropdown-item" href="/kelahiran">Detail Kelahiran</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Kalahiran</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person-fill-add"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $kelahiran }}</h6> <span class="text-muted small pt-2 ps-1">Bayi</span>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Kelahiran Card -->

      <!-- Kematian Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card kematian-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Keterangan</h6>
              </li>

              <li><a class="dropdown-item" href="/kematian">Detail Kematian</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Kematian</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person-fill-dash"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $kematian }}</h6> <span class="text-muted small pt-2 ps-1">Orang</span>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Kematian Card -->

    </div>
  </div><!-- End Left side columns -->
@endsection
