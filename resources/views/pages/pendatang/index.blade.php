@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="{{ route('pendatang.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="table" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Datang</th>
              <th>Pelapor</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pendatang as $p)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $p->nik }}</th>
                <th>{{ $p->pendatang }}</th>
                <th>{{ $p->jenis_kelamin }}</th>
                <th>{{ \Carbon\Carbon::parse($p->tanggal_datang)->format('d F Y') }}</th>
                <th>{{ $p->warga->nama }}</th>
                <th>

                  <a href="pendatang/{{ $p->id }}/edit" class="btn btn-warning text-white my-2"><i
                      class="bi bi-pencil"></i></a>

                  <form action="pendatang/{{ $p->id }}" method="POST" class="d-inline">
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
