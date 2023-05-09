@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="/suratpengantarrt" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Pengajuan Surat Penngantar RT</h5>

      <!-- General Form Elements -->
      <form action="{{ route('suratpengantarrt.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if (Auth::user()->role == 'admin' || Auth::user()->role == 'rt')
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nomor Surat</label>
            <div class="col-sm-10">
              <input type="text" name="no_surat" value="{{ old('nno_surat') }}" placeholder="Masukkan nomor surat"
                class="form-control">
              <div class="invalid-feedback">Masukkan Nomor Surat!!!</div>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama RT</label>
            <div class="col-sm-10">
              <input type="text" name="nama_rt" value="{{ old('nama_rt') }}" placeholder="Masukkan nama RT"
                class="form-control">
              <div class="invalid-feedback">Masukkan Nama RT!!!</div>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama RW</label>
            <div class="col-sm-10">
              <input type="text" name="nama_rw" value="{{ old('nama_rw') }}" placeholder="Masukkan nama RW"
                class="form-control">
              <div class="invalid-feedback">Masukkan Nama RW!!!</div>
            </div>
          </div>
        @endif

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nomor NIK</label>
          <div class="col-sm-10">
            <select name="warga_id" class="form-select selectpicker w-100" data-live-search="true">
              <option selected>-- Pilih NIK --</option>
              @foreach ($warga as $w)
                <option value="{{ $w->id }}">
                  {{ $w->nik }} - {{ $w->nama }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama Warga</label>
          <div class="col-sm-10">
            <select name="warga_nama" class="form-select selectpicker w-100" data-live-search="true">
              <option selected>-- Pilih Warga --</option>
              @foreach ($warga as $w)
                <option value="{{ $w->nama }}">{{ $w->nama }}</option>
              @endforeach
            </select>
          </div>
        </div>

        {{-- <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nomor Kk</label>
          <div class="col-sm-10">
            <select name="kartu_keluarga_id" class="form-select selectpicker w-100" data-live-search="true">
              <option selected>-- Pilih KK --</option>
              @foreach ($kartukeluarga as $kk)
                <option value="{{ $kk->id }}">{{ $kk->no_kk }} - {{ $kk->kepala_keluarga }}</option>
              @endforeach
            </select>
          </div>
        </div> --}}

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Keperluan</label>
          <div class="col-sm-10">
            <select class="form-select" name="keperluan_id">
              <option selected>-- Pilih Keperluan --</option>
              @foreach ($keperluan as $perlu)
                <option value="{{ $perlu->id }}">{{ $perlu->keperluan }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">Masukkan jenis kelamin Kamu!!!</div>
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
