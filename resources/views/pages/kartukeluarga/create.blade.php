@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="/kartukeluarga" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Tambah Kapala Keluarga</h5>

      <!-- General Form Elements -->
      <form action="{{ route('kartukeluarga.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nomor KK</label>
          <div class="col-sm-10">
            <input type="number" name="no_kk" value="{{ old('no_kk') }}" class="form-control"
              placeholder="nomor kartu keluarga" required>
            <div class="invalid-feedback">Masukkan nomor KK!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kepala Keluarga</label></label>
          <div class="col-sm-10">
            <input type="text" name="kepala_keluarga" value="{{ old('kepala_keluarga') }}" class="form-control"
              placeholder="Nama kepala keluarga" required>
          </div>
        </div>

        {{-- <div class="row mb-3">
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
        </div> --}}

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="alamat" class="form-control"
              required>
            <div class="invalid-feedback">Masukkan Alamat Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">RT/RW</label>
          <div class="col-sm-5 mb-3">
            <input type="text" name="rt" value="{{ old('rt') }}" class="form-control" placeholder="001"
              required>
            <div class="invalid-feedback">Masukkan RT Kamu!!!</div>
          </div>
          <div class="col-sm-5">
            <input type="text" name="rw" value="{{ old('rw') }}" class="form-control" placeholder="001"
              required>
            <div class="invalid-feedback">Masukkan RW Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kelurahan</label>
          <div class="col-sm-10">
            <input type="text" name="kelurahan" value="{{ old('kelurahan') }}" placeholder="kelurahan"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan kelurahan Kamu!!!</div>
          </div>
        </div>


        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kecamatan</label>
          <div class="col-sm-10">
            <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" placeholder="kecamatan"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan kelurahan Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kabupaten</label>
          <div class="col-sm-10">
            <input type="text" name="kabupaten" value="{{ old('kabupaten') }}" placeholder="kabupaten"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan nama kabupaten!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Provinsi</label>
          <div class="col-sm-10">
            <input type="text" name="provinsi" value="{{ old('provinsi') }}" placeholder="provinsi"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan provinsi!!!</div>
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
