@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="{{ route('pekerjaan.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="table" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pekerjaan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pekerjaan as $p)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $p->pekerjaan }}</th>
                <th>
                  <a href="pekerjaan/{{ $p->id }}/edit" class="btn btn-warning text-white"><i
                      class="bi bi-pencil"></i></a>
                  <form action="pekerjaan/{{ $p->id }}" method="POST" class="d-inline mt-2">
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
