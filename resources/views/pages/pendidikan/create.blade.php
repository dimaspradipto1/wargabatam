@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="/pendidikan" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="carad-title">Form Tambah Pendidikan</h5>

      <!-- General Form Elements -->
      <form action="{{ route('pendidikan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Pendidikan</label>
          <div class="col-sm-10">
            <input type="text" name="pendidikan" value="{{ old('nama_pendidikan') }}" class="form-control ">
            <div class="invalid-feedback">please enter your eduacation!!!</div>
          </div>
        </div>


        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
