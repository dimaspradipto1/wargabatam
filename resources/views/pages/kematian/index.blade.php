@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="{{ route('kematian.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="table" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Warga</th>
              <th>Tanggal Kematian</th>
              <th>Sebab Kematian</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kematian as $k)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $k->warga->nama }}</th>
                <th>{{ \Carbon\Carbon::parse($k->tanggal_kematian)->format('d F Y') }}</th>
                <th>{{ $k->sebab_kematian }}</th>
                <th>

                  <a href="kematian/{{ $k->id }}/edit" class="btn btn-warning text-white my-2"><i
                      class="bi bi-pencil"></i></a>
                  <form action="kematian/{{ $k->id }}" method="POST" class="d-inline">
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
