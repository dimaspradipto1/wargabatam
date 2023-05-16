@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="table" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama </th>
              <th>Email </th>
              <th>Status </th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $u)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $u->name }}</th>
                <th>{{ $u->email }}</th>
                <th>{{ $u->role }}</th>
                <th>
                  <a href="user/{{ $u->id }}/edit" class="btn btn-warning text-white"><i class="bi bi-pencil"></i></a>
                  <form action="user/{{ $u->id }}" method="POST" class="d-inline mt-2">
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
