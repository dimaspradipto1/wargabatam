@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="{{ route('pindah.index') }}" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i>
        Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Edit Warga Pindah</h5>

      <!-- General Form Elements -->
      <form action="{{ route('user.index',$pindah->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Warga</label>
          <div class="col-sm-10">
            <select class="form-select selectpicker w-100" name="warga_id" data-live-search="true">
              <option selected>-- Pilih Pelapor --</option>
              @foreach ($warga as $w)
                <option value="{{ $w->id }}" {{ $w->id == $pindah->warga_id ? 'selected' : '' }}>
                  {{ $w->nik }} - {{ $w->nama }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">Masukkan nama pelapor !!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Tanggal Pindah</label>
          <div class="col-sm-10">
            <input type="date" name="tanggal_pindah" value="{{ old('tanggal_pindah') ?? $pindah->tanggal_pindah }}"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan Tanggal Pindah!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Alamat Pindah</label>
          <div class="col-sm-10">
            <input type="text" name="alamat_pindah" value="{{ old('alamat_pindah') ?? $pindah->alamat_pindah }}"
              placeholder="Alamat Pindah" class="form-control" required>
            <div class="invalid-feedback">Masukkan Alamat Pindah!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Alasan Pindah</label>
          <div class="col-sm-10">
            <input type="text" name="alasan_pindah" value="{{ old('alasan_pindah') ?? $pindah->alasan_pindah }}"
              placeholder="Alasan Pindah" class="form-control" required>
            <div class="invalid-feedback">Masukkan Alasan Pindah!!!</div>
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
