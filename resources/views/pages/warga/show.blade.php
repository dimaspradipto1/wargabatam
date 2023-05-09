@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="/warga" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" style="width:100%">
          <tbody>
            <tr>
              <th class="border px-6 py-4 text-right">NIK</th>
              <th class="border px-6 py-4 text-right">{{ $warga->nik }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Name</th>
              <th class="border px-6 py-4 text-right">{{ $warga->nama }}</th>
            </tr>

            <tr>
              <th class="border px-6 py-4 text-right">Tempat Lahir</th>
              <th class="border px-6 py-4 text-right">{{ $warga->tempat_lahir }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Tanggal Lahir</th>
              <th class="border px-6 py-4 text-right">{{ \Carbon\Carbon::parse($warga->tanggal_lahir)->format('d F Y') }}
              </th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Jenis Kelamin</th>
              <th class="border px-6 py-4 text-right">{{ $warga->jenis_kelamin }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Alamat</th>
              <th class="border px-6 py-4 text-right">{{ $warga->alamat }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">RT/RW</th>
              <th class="border px-6 py-4 text-right">{{ $warga->rt }}/{{ $warga->rw }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Kelurahan</th>
              <th class="border px-6 py-4 text-right">{{ $warga->kelurahan }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Kecamatan</th>
              <th class="border px-6 py-4 text-right">{{ $warga->kecamatan }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Agama</th>
              <th class="border px-6 py-4 text-right">{{ $warga->agama }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">NO HP</th>
              <th class="border px-6 py-4 text-right">{{ $warga->no_hp }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Status Perkawinan</th>
              <th class="border px-6 py-4 text-right">{{ $warga->status_perkawinan }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Pekerajaan</th>
              <th class="border px-6 py-4 text-right">{{ $warga->pekerjaan->pekerjaan }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Pendidikan</th>
              <th class="border px-6 py-4 text-right">{{ $warga->pendidikan->pendidikan }}</th>
            </tr>
            <tr>
              <th class="border px-6 py-4 text-right">Kewarganegaraan</th>
              <th class="border px-6 py-4 text-right">{{ $warga->kewarganegaraan }}</th>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
