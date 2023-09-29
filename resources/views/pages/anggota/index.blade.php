@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3 mb-3">
      <a href="{{ route('kartukeluarga.index') }}" class="btn btn-warning text-white"><i class="bi bi-arrow-left"></i>
        Kembali</a>
      <a href="{{ route('kartukeluarga.anggota.create', $kartukeluarga->id) }}" class="btn btn-info text-white"><i
          class="bi bi-person-heart"></i> Tambah Anggota
        KK</a>
    </div>

    <form>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Nomor KK | Kepala Keluarga</label>
        <div class="col-sm-5">
          <input type="number" name="no_kk" value="{{ old('no_kk') ?? $kartukeluarga->no_kk }}" class="form-control"
            placeholder="nomor kartu keluarga" readonly>
          <div class="invalid-feedback">Masukkan nomor KK!!!</div>
        </div>
        <div class="col-sm-5">
          <input type="text" name="kepala_keluarga"
            value="{{ old('kepala_keluarga') ?? $kartukeluarga->kepala_keluarga }}" class="form-control"
            placeholder="kartu keluarga" readonly>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" name="alamat" value="{{ old('alamat') ?? $kartukeluarga->alamat }}" placeholder="alamat"
            class="form-control" readonly>
          <div class="invalid-feedback">Masukkan Alamat Kamu!!!</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">RT/RW</label>
        <div class="col-sm-5 mb-3">
          <input type="text" name="rt" value="{{ old('rt') ?? $kartukeluarga->rt }}" class="form-control"
            placeholder="001" readonly>
          <div class="invalid-feedback">Masukkan RT Kamu!!!</div>
        </div>
        <div class="col-sm-5">
          <input type="text" name="rw" value="{{ old('rw') ?? $kartukeluarga->rw }}" class="form-control"
            placeholder="001" readonly>
          <div class="invalid-feedback">Masukkan RW Kamu!!!</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Kelurahan</label>
        <div class="col-sm-5">
          <input type="text" name="kelurahan" value="{{ old('kelurahan') ?? $kartukeluarga->kelurahan }}"
            placeholder="kelurahan" class="form-control" readonly>
          <div class="invalid-feedback">Masukkan kelurahan Kamu!!!</div>
        </div>
        <div class="col-sm-5">
          <input type="text" name="kecamatan" value="{{ old('kecamatan') ?? $kartukeluarga->kecamatan }}"
            placeholder="kecamatan" class="form-control" readonly>
          <div class="invalid-feedback">Masukkan kelurahan Kamu!!!</div>
        </div>
      </div>
    </form>

    <hr />

    <div class="card-body shadow">
      <div class="table-responsive">
        <table id="table" class="table display nowrap" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($anggota as $a)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $a->warga->nik }}</th>
                <th>{{ $a->warga->nama }}</th>
                <th>{{ $a->status_hubungan }}</th>
                <th>
                  <form action="{{ route('anggota.destroy', $a->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                  </form>
                </th>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
