@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="/warga" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Edit Pendidikan</h5>

      <!-- General Form Elements -->
      <form action="/warga/{{ $warga->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">NIk</label>
          <div class="col-sm-10">
            <input type="text" name="nik" value="{{ old('nik') ?? $warga->nik }}" class="form-control"
              placeholder="nomor induk ktp" required>
            <div class="invalid-feedback">Masukkan NIK Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" name="nama" value="{{ old('nama') ?? $warga->nama }}" class="form-control"
              placeholder="nama warga" required>
            <div class="invalid-feedback">Masukkan Nama Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">TTL</label>
          <div class="col-sm-5 mb-3">
            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') ?? $warga->tempat_lahir }}"
              class="form-control" placeholder="tempat lahir" required>
            <div class="invalid-feedback">Masukkan Tempat Lahir Kamu!!!</div>
          </div>
          <div class="col-sm-5">
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') ?? $warga->tanggal_lahir }}"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan Tanggal Lahir Kamu!!!</div>
          </div>

        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <select class="form-select" name="jenis_kelamin">
              <option selected>{{ $warga->jenis_kelamin }}</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <div class="invalid-feedback">Masukkan Tanggal Lahir Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" name="alamat" value="{{ old('alamat') ?? $warga->alamat }}" placeholder="alamat"
              class="form-control" required>
            <div class="invalid-feedback">Masukkan Alamat Kamu!!!</div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">RT/RW</label>
          <div class="col-sm-5 mb-3">
            <input type="text" name="rt" value="{{ old('rt') ?? $warga->rt }}" class="form-control"
              placeholder="001" required>
            <div class="invalid-feedback">Masukkan RT Kamu!!!</div>
          </div>
          <div class="col-sm-5">
            <input type="text" name="rw" value="{{ old('rw') ?? $warga->rw }}" class="form-control"
              placeholder="001" required>
            <div class="invalid-feedback">Masukkan RW Kamu!!!</div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Kelurahan</label>
            <div class="col-sm-10">
              <input type="text" name="kelurahan" value="{{ old('kelurahan') ?? $warga->kelurahan }}"
                placeholder="kelurahan" class="form-control" required>
              <div class="invalid-feedback">Masukkan kelurahan Kamu!!!</div>
            </div>
          </div>


          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
              <input type="text" name="kecamatan" value="{{ old('kecamatan') ?? $warga->kecamatan }}"
                placeholder="kecamatan" class="form-control" required>
              <div class="invalid-feedback">Masukkan kelurahan Kamu!!!</div>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
              <select class="form-select" name="agama">
                <option selected>{{ $warga->agama }}</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
              </select>
              <div class="invalid-feedback">Masukkan Agama Kamu!!!</div>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">NO HP</label>
            <div class="col-sm-10">
              <input type="number" name="no_hp" value="{{ old('no_hp') ?? $warga->no_hp }}"
                placeholder="082283731234" class="form-control" required>
              <div class="invalid-feedback">Masukkan Nomor HP!!!</div>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Status Perkawinan</label>
            <div class="col-sm-10">
              <select class="form-select" name="status_perkawinan">
                <option selected>{{ $warga->status_perkawinan }}</option>
                <option value="Kawin">Kawin</option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Cerai Hidup">Cerai Hidup</option>
                <option value="Cerai Mati">Cerai Mati</option>
              </select>
              <div class="invalid-feedback">Masukkan Status Perkawinan Kamu!!!</div>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
              <select class="form-select" name="pekerjaan_id">
                <option selected>{{ $warga->pekerjaan->pekerjaan }}</option>
                @foreach ($pekerjaan as $p)
                  <option value="{{ $p->id }}" {{ $p->id == $warga->pekerjaan_id ? 'selected' : '' }}>
                    {{ $p->pekerjaan }}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">Masukkan Pekerjaan Kamu!!!</div>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Pendidikan</label>
            <div class="col-sm-10">
              <select class="form-select" name="pendidikan_id">
                <option selected>-- Pilih Pendidikan --</option>
                @foreach ($pendidikan as $p)
                  <option value="{{ $p->id }}" {{ $p->id == $warga->pendidikan_id ? 'selected' : '' }}>
                    {{ $p->pendidikan }}
                  </option>
                @endforeach
              </select>
              <div class="invalid-feedback">Masukkan Pendidikan Kamu!!!</div>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Kewarganegaraan</label>
            <div class="col-sm-10">
              <select class="form-select" name="kewarganegaraan">
                <option selected>{{ $warga->kewarganegaraan }}</option>
                <option value="WNI">WNI</option>
                <option value="WNA">WNA</option>
              </select>
              <div class="invalid-feedback">Masukkan Status Perkawinan Kamu!!!</div>
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
