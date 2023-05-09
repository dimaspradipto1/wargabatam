@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="{{ route('kartukeluarga.anggota.index', $kartukeluarga->id) }}" class="btn btn-warning text-white"><i
          class="bi bi-arrow-left"></i>
        Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Tambah Angggota Keluarga &raquo; {{ $kartukeluarga->kepala_keluarga }}</h5>

      <!-- General Form Elements -->
      <form action="{{ route('kartukeluarga.anggota.store', $kartukeluarga->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Warga</label>
          <div class="col-sm-10">
            <select class="form-select selectpicker w-100" name="warga_id" data-live-search="true">
              <option selected>-- Pilih Warga --</option>
              @foreach ($warga as $w)
                <option value="{{ $w->id }}">{{ $w->nik }} - {{ $w->nama }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">Masukkan nama warga !!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Status Hubungan</label>
          <div class="col-sm-10">
            <select name="status_hubungan" class="form-select selectpicker w-100" data-live-search="true">
              <option selected>-- pilih Status Hubungan --</option>
              <option value="Kepala Keluarga">Kepala Keluarga</option>
              <option value="Istri">Istri</option>
              <option value="Anak">Anak</option>
            </select>
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
