  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-heading">WARGA</li>

      @if (Auth::user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('warga.index') }}">
            <i class="bi bi-person-fill"></i>
            <span>Warga</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('kartukeluarga.index') }}">
            <i class="bi bi-people-fill"></i>
            <span>Kartu Keluarga</span>
          </a>
        </li>

        <li class="nav-heading">PENGELOLAAN WARGA</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('pendatang.index') }}">
            <i class="bi bi-person-fill-check"></i>
            <span>Data Pendatang</span>
          </a>
        </li><!-- End Pendatang Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('pindah.index') }}">
            <i class="bi bi-person-fill-x"></i>
            <span>Data Pindah</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('kelahiran.index') }}">
            <i class="bi bi-person-fill-add"></i>
            <span>Data Kelahiran</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('kematian.index') }}">
            <i class="bi bi-person-fill-dash"></i>
            <span>Data Kematian</span>
          </a>
        </li>

        <li class="nav-heading">DATA LAIINYA</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('pendidikan.index') }}">
            <i class="bi bi-book-fill"></i>
            <span>Pendidikan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('pekerjaan.index') }}">
            <i class="bi bi-building-fill"></i>
            <span>Pekerjaan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('keperluan.index') }}">
            <i class="bi bi-search"></i>
            <span>Keperluan</span>
          </a>
        </li>

        <li class="nav-heading">PENGELOLAAN SURAT</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('suratpengantarrt.index') }}">
            <i class="bi bi-house-fill"></i>
            <span>Pengantar RT</span>
          </a>
        </li>
        <li class="nav-heading">PENGELOLAAN user</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('user.index') }}">
            <i class="bi bi-person-fill"></i>
            <span>Pengguna Sistem</span>
          </a>
        </li>
      @endif

      @if (Auth::user()->role == 'warga')
        <li class="nav-item">
          <a class=" nav-link collapsed" href="{{ route('warga.index') }}">
            <i class="bi bi-person-fill"></i>
            <span>Warga</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed " href="{{ route('kartukeluarga.index') }}">
            <i class="bi bi-people-fill"></i>
            <span>Kartu Keluarga</span>
          </a>
        </li>
        <li class="nav-heading">PENGELOLAAN SURAT</li>

        <li class="nav-item">
          <a class="nav-link collapsed " href="{{ route('suratpengantarrt.index') }}">
            <i class="bi bi-house-fill"></i>
            <span>Pengantar RT</span>
          </a>
        </li>
      @endif

      @if (Auth::user()->role == 'rt')
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('warga.index') }}">
            <i class="bi bi-person-fill"></i>
            <span>Warga</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('kartukeluarga.index') }}">
            <i class="bi bi-people-fill"></i>
            <span>Kartu Keluarga</span>
          </a>
        </li>
        <li class="nav-heading">PENGELOLAAN SURAT</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('pendatang.index') }}">
            <i class="bi bi-person-fill-check"></i>
            <span>Data Pendatang</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('pindah.index') }}">
            <i class="bi bi-person-fill-x"></i>
            <span>Data Pindah</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('kelahiran.index') }}">
            <i class="bi bi-person-fill-add"></i>
            <span>Data Kelahiran</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('kematian.index') }}">
            <i class="bi bi-person-fill-dash"></i>
            <span>Data Kematian</span>
          </a>
        </li>

        <li class="nav-heading">PENGELOLAAN SURAT</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('suratpengantarrt.index') }}">
            <i class="bi bi-house-fill"></i>
            <span>Pengantar RT</span>
          </a>
        </li>
      @endif
    </ul>

  </aside><!-- End Sidebar-->
