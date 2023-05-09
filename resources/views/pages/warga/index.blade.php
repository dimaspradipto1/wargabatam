@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="{{ route('warga.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive my-3">
        <table id="table" class="table display nowrap" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              {{-- <th>NO HP</th> --}}
              <th>Alamat</th>
              <th>RT</th>
              <th>RW</th>
              <th>Kelurahan</th>
              <th>Kecamatan</th>
              <th>Detail</th>
              @if (Auth::user()->role == 'admin' || Auth::user()->role == 'rt')
                <th>Aksi</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach ($warga as $w)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $w->nama }}</th>
                {{-- <th>{{ $w->no_hp }}</th> --}}
                <th>{{ $w->alamat }}</th>
                <th>{{ $w->rt }}</th>
                <th>{{ $w->rw }}</th>
                <th>{{ $w->kelurahan }}</th>
                <th>{{ $w->kecamatan }}</th>
                <th>
                  <a href="warga/{{ $w->id }}" class="btn btn-info text-white my-2"><i
                      class="bi bi-person"></i></a>
                </th>
                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'rt')
                  <th>
                    <a href="warga/{{ $w->id }}/edit" class="btn btn-warning text-white my-2"><i
                        class="bi bi-pencil"></i></a>
                    <form action="warga/{{ $w->id }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                  </th>
                @endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
