@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="{{ route('kartukeluarga.index') }}" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i>
        Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Edit Kepala Keluarga</h5>

      <!-- General Form Elements -->
      <form action="{{route('kartukeluarga.update', $kartukeluarga->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nomor KK</label>
          <div class="col-sm-10">
            <input type="number" name="no_kk" value="{{ old('no_kk') ?? $kartukeluarga->no_kk }}" class="form-control"
              placeholder="nomor kartu keluarga" required>
            <div class="invalid-feedback">Masukkan nomor KK!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kepala Keluarga</label>
          <div class="col-sm-10">
            <input type="text" name="kepala_keluarga"
              value="{{ old('kepala_keluarga') ?? $kartukeluarga->kepala_keluarga }}" class="form-control"
              placeholder="kartu keluarga" required>
          </div>
        </div>


        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" name="alamat" value="{{ old('alamat') ?? $kartukeluarga->alamat }}"
              placeholder="alamat" class="form-control" required>
            <div class="invalid-feedback">Masukkan Alamat Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">RT/RW</label>
          <div class="col-sm-5 mb-3">
            <input type="text" name="rt" value="{{ old('rt') ?? $kartukeluarga->rt }}" class="form-control"
              placeholder="001" required>
            <div class="invalid-feedback">Masukkan RT Kamu!!!</div>
          </div>
          <div class="col-sm-5">
            <input type="text" name="rw" value="{{ old('rw') ?? $kartukeluarga->rw }}" class="form-control"
              placeholder="001" required>
            <div class="invalid-feedback">Masukkan RW Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kelurahan</label>
          <div class="col-sm-10">
            <input type="text" name="kelurahan" value="{{ old('kelurahan') ?? $kartukeluarga->kelurahan }}"
              placeholder="kelurahan" class="form-control" required>
            <div class="invalid-feedback">Masukkan kelurahan Kamu!!!</div>
          </div>
        </div>


        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kecamatan</label>
          <div class="col-sm-10">
            <input type="text" name="kecamatan" value="{{ old('kecamatan') ?? $kartukeluarga->kecamatan }}"
              placeholder="kecamatan" class="form-control" required>
            <div class="invalid-feedback">Masukkan kelurahan Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kabupaten</label>
          <div class="col-sm-10">
            <input type="text" name="kabupaten" value="{{ old('kabupaten') ?? $kartukeluarga->kabupaten }}"
              placeholder="kabupaten" class="form-control" required>
            <div class="invalid-feedback">Masukkan nama kabupaten!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Provinsi</label>
          <div class="col-sm-10">
            <input type="text" name="provinsi" value="{{ old('provinsi') ?? $kartukeluarga->provinsi }}"
              placeholder="provinsi" class="form-control" required>
            <div class="invalid-feedback">Masukkan provinsi!!!</div>
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
