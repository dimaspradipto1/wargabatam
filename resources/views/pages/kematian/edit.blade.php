@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="/kematian" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Edit Warga Kematian</h5>

      <!-- General Form Elements -->
      <form action="/kematian/{{ $kematian->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Warga</label>
          <div class="col-sm-10">
            <select class="form-select selectpicker w-100" name="warga_id" data-live-search="true">
              <option selected>-- Pilih Warga --</option>
              @foreach ($warga as $w)
                <option value="{{ $w->id }}" {{ $w->id == $kematian->warga_id ? 'selected' : '' }}>
                  {{ $w->nik }} - {{ $w->nama }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">Masukkan nama warga !!!</div>
          </div>
        </div>


        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Tanggal Kematian</label>
          <div class="col-sm-10">
            <input type="date" name="tanggal_kematian"
              value="{{ old('tanggal_kematian') ?? $kematian->tanggal_kematian }}" class="form-control" required>
            <div class="invalid-feedback">Masukkan Tanggal Kematian!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Sebab Kematian</label>
          <div class="col-sm-10">
            <input type="text" name="sebab_kematian" value="{{ old('sebab_kematian') ?? $kematian->sebab_kematian }}"
              placeholder="Sebab Kematian" class="form-control" required>
            <div class="invalid-feedback">Masukkan Sebab Kematian !!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
