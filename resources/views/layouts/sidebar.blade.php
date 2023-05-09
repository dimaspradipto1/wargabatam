  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">WARGA</li>

      @if (Auth::user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link collapsed" href="/warga">
            <i class="bi bi-person-fill"></i>
            <span>Warga</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/kartukeluarga">
            <i class="bi bi-people-fill"></i>
            <span>Kartu Keluarga</span>
          </a>
        </li>

        <li class="nav-heading">PENGELOLAAN WARGA</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/pendatang">
            <i class="bi bi-person-fill-check"></i>
            <span>Data Pendatang</span>
          </a>
        </li><!-- End Pendatang Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="/pindah">
            <i class="bi bi-person-fill-x"></i>
            <span>Data Pindah</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/kelahiran">
            <i class="bi bi-person-fill-add"></i>
            <span>Data Kelahiran</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/kematian">
            <i class="bi bi-person-fill-dash"></i>
            <span>Data Kematian</span>
          </a>
        </li>

        <li class="nav-heading">DATA LAIINYA</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/pendidikan">
            <i class="bi bi-book-fill"></i>
            <span>Pendidikan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/pekerjaan">
            <i class="bi bi-building-fill"></i>
            <span>Pekerjaan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/keperluan">
            <i class="bi bi-search"></i>
            <span>Keperluan</span>
          </a>
        </li>

        <li class="nav-heading">PENGELOLAAN SURAT</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/suratpengantarrt">
            <i class="bi bi-house-fill"></i>
            <span>Pengantar RT</span>
          </a>
        </li>
        <li class="nav-heading">PENGELOLAAN user</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/user">
            <i class="bi bi-person-fill"></i>
            <span>Pengguna Sistem</span>
          </a>
        </li>
      @endif

      @if (Auth::user()->role == 'warga')
        <li class="nav-item">
          <a class=" nav-link collapsed" href="/warga">
            <i class="bi bi-person-fill"></i>
            <span>Warga</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed " href="/kartukeluarga">
            <i class="bi bi-people-fill"></i>
            <span>Kartu Keluarga</span>
          </a>
        </li>
        <li class="nav-heading">PENGELOLAAN SURAT</li>

        <li class="nav-item">
          <a class="nav-link collapsed " href="/suratpengantarrt">
            <i class="bi bi-house-fill"></i>
            <span>Pengantar RT</span>
          </a>
        </li>
      @endif

      @if (Auth::user()->role == 'rt')
        <li class="nav-item">
          <a class="nav-link collapsed" href="/warga">
            <i class="bi bi-person-fill"></i>
            <span>Warga</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/kartukeluarga">
            <i class="bi bi-people-fill"></i>
            <span>Kartu Keluarga</span>
          </a>
        </li>
        <li class="nav-heading">PENGELOLAAN SURAT</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/pendatang">
            <i class="bi bi-person-fill-check"></i>
            <span>Data Pendatang</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/pindah">
            <i class="bi bi-person-fill-x"></i>
            <span>Data Pindah</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/kelahiran">
            <i class="bi bi-person-fill-add"></i>
            <span>Data Kelahiran</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/kematian">
            <i class="bi bi-person-fill-dash"></i>
            <span>Data Kematian</span>
          </a>
        </li>

        <li class="nav-heading">PENGELOLAAN SURAT</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/suratpengantarrt">
            <i class="bi bi-house-fill"></i>
            <span>Pengantar RT</span>
          </a>
        </li>
      @endif
    </ul>

  </aside><!-- End Sidebar-->
