@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="{{ route('kartukeluarga.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
      {{-- 
      <a href="{{ route('kartukeluarga.anggota.index', $kartukeluarga->id) }}" class="btn btn-info text-white"><i
          class="bi bi-person-heart"></i> Anggota
        KK</a> --}}
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="table" class="table display nowrap" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>No KK</th>
              <th>Nama Kepala Keluarga</th>
              <th>Alamat</th>
              {{-- <th>RT</th> --}}
              {{-- <th>RW</th> --}}
              <th>Kelurahan</th>
              {{-- <th>Kecamatan</th> --}}
              <th>Anggota</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kartukeluarga as $k)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $k->no_kk }}</th>
                <th>{{ $k->kepala_keluarga }}</th>
                <th>{{ $k->alamat }}</th>
                {{-- <th>{{ $k->rt }}</th> --}}
                {{-- <th>{{ $k->rw }}</th> --}}
                <th>{{ $k->kelurahan }}</th>
                {{-- <th>{{ $k->kecamatan }}</th> --}}
                <th>
                  <a href="kartukeluarga/{{ $k->id }}/anggota" class="btn btn-secondary text-white my-2"><i
                      class="bi bi-people"></i></a>
                </th>
                <th>
                  <a href="kartukeluarga/{{ $k->id }}/edit" class="btn btn-warning text-white my-2"><i
                      class="bi bi-pencil"></i></a>
                  @if (Auth::user()->role == 'admin' || Auth::user()->role == 'rt')
                    <form action="kartukeluarga/{{ $k->id }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                  @endif
                </th>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
