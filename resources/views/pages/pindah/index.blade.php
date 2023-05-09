@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="{{ route('pindah.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="table" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Alamat Pindah</th>
              <th>Alasan Pindah</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pindah as $p)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $p->warga->nama }}</th>
                <th>{{ \Carbon\Carbon::parse($p->tanggal_pindah)->format('d F Y') }}</th>
                <th>{{ $p->alamat_pindah }}</th>
                <th>{{ $p->alasan_pindah }}</th>
                <th>
                  <a href="pindah/{{ $p->id }}/edit" class="btn btn-warning text-white my-2"><i
                      class="bi bi-pencil"></i></a>
                  <form action="pindah/{{ $p->id }}" method="POST" class="d-inline">
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
