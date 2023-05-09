@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="/pendidikan" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Tambah Pendidikan</h5>

      <!-- General Form Elements -->
      <form action="/pendidikan/{{ $pendidikan->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Pendidikan</label>
          <div class="col-sm-10">
            <input type="text" name="pendidikan" value="{{ $pendidikan->pendidikan }}" class="form-control">
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
