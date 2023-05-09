@extends('layouts.logintemplate')

@section('content')
  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
              <img src="{{ url('/dashboard/assets/img/logorumah.png') }}" alt="">
              <span class="d-none d-lg-block">E-WARGA</span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                <p class="text-center small">Enter your personal details to create account</p>
              </div>

              <form action="registerproses" method="POST" class="row g-3 needs-validation" novalidate>
                @csrf

                <div class="col-12">
                  <label for="yourName" class="form-label">Masukkan Nama</label></label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Silahkan, Masukkan Nama Kamu!</div>
                </div>

                <div class="col-12">
                  <label for="yourEmail" class="form-label">Masukkan Email</label>
                  <input type="email" name="email" class="form-control" id="yourEmail" required>
                  <div class="invalid-feedback">Silahkan, Masukkan Email Kamu!</div>
                </div>

                <div class="col-12">
                  <label for="yourEmail" class="form-label">Status</label>
                  <select name="role" class="form-select">
                    <option selected>-- pilih status --</option>
                    {{-- <option value="admin">admin</option> --}}
                    <option value="warga">warga</option>
                    {{-- <option value="rt">rt</option> --}}
                  </select>
                  <div class="invalid-feedback">Silahkan, Pilih Role!</div>
                </div>

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" required>
                  <div class="invalid-feedback">Silahkan, Masukkan Password Kamu!</div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Create Account</button>
                </div>
                <div class="col-12">
                  <p class="small mb-0">Already have an account? <a href="login">Log in</a></p>
                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
    </div>

  </section>
@endsection
