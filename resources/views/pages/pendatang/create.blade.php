@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="{{ route('pendatang.index') }}" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i>
        Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Warga Pendatang</h5>

      <!-- General Form Elements -->
      <form action="{{ route('pendatang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">NIk</label>
          <div class="col-sm-10">
            <select name="nik" class="form-select selectpicker w-100" data-live-search="true">
              <option selected>-- Pilih NIK --</option>
              @foreach ($warga as $w)
                <option value="{{ $w->nik }}">{{ $w->nik }}-{{ $w->nama }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama Pendatang</label>
          <div class="col-sm-10">
            <select name="pendatang" class="form-select selectpicker w-100" data-live-search="true">
              <option selected>-- Pilih Nama Pendatang --</option>
              @foreach ($warga as $w)
                <option value="{{ $w->nama }}">{{ $w->nama }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <select class="form-select" name="jenis_kelamin">
              <option selected>-- Pilih Jenis Kelamin --</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <div class="invalid-feedback">Masukkan jenis kelamin Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Tanggal Datang</label>
          <div class="col-sm-10">
            <input type="date" name="tanggal_datang" value="{{ old('tanggal_datang') }}" placeholder="tanggal datang"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan tanggal pendatang!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Pelapor</label>
          <div class="col-sm-10">
            <select class="form-select selectpicker w-100" name="warga_id" data-live-search="true">
              <option selected>-- Pilih Pelapor --</option>
              @foreach ($warga as $w)
                <option value="{{ $w->id }}">{{ $w->nik }} - {{ $w->nama }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">Masukkan nama pelapor !!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>

      </form>

    </div>
  </div>
@endsection
