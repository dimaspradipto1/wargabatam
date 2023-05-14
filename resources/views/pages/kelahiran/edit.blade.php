@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="{{ route('kelahiran.index') }}" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i>
        Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Edit Nama Bayi</h5>

      <!-- General Form Elements -->
      <form action="/kelahiran/{{ $kelahiran->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kepala Keluarga</label>
          <div class="col-sm-10">
            <select class="form-select" name="kartukeluarga_id">
              <option selected>-- Pilih Kepala Keluarga --</option>
              @foreach ($kartukeluarga as $kk)
                <option value="{{ $kk->id }}" {{ $kk->id == $kelahiran->kartukeluarga_id ? 'selected' : '' }}>
                  {{ $kk->kepala_keluarga }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama Bayi</label>
          <div class="col-sm-10">
            <input type="text" name="nama_bayi" value="{{ old('nama_bayi') ?? $kelahiran->nama_bayi }}"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan Nama Bayi!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-10">
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') ?? $kelahiran->tanggal_lahir }}"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan Tanggal Lahir!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <select class="form-select" name="jenis_kelamin">
              <option selected>{{ $kelahiran->jenis_kelamin }}</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
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
