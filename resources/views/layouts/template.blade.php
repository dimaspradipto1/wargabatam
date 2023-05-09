<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard E-WARGA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('/dashboard/assets/img/favicorumah.png') }}" rel="icon">
  <link href="{{ url('/dashboard/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">

  @include('layouts.style')

</head>

<body>

  @include('layouts.navbar')

  @include('layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>{{ $title }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">{{ $menu }}</li>
          <li class="breadcrumb-item active">{{ $breadcrumb }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        @include('sweetalert::alert')

        @yield('content')

      </div>
    </section>

  </main><!-- End #main -->

  @include('layouts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  @include('layouts.script')
</body>

</html>
