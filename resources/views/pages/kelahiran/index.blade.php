@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="{{ route('kelahiran.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="table" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Kepala Keluarga</th>
              <th>Nama Bayi</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kelahiran as $k)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $k->kartukeluarga->kepala_keluarga }}</th>
                <th>{{ $k->nama_bayi }}</th>
                <th>{{ $k->tempat_lahir }}</th>
                <th>{{ \Carbon\Carbon::parse($k->tanggal_lahir)->format('d F Y') }}</th>
                <th>{{ $k->jenis_kelamin }}</th>
                <th>
                  <a href="kelahiran/{{ $k->id }}/edit" class="btn btn-warning text-white my-2"><i
                      class="bi bi-pencil"></i></a>
                  <form action="kelahiran/{{ $k->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
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
