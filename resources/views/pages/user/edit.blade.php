@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header">
      <a href="/user" class="btn btn-warning text-white"><i class="bi bi-box-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Form Tambah Pendidikan</h5>

      <!-- General Form Elements -->
      <form action="/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">nama</label>
          <div class="col-sm-10">
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">email</label>
          <div class="col-sm-10">
            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">role</label>
          <div class="col-sm-10">
            <select name="role" class="form-control">
              <option value="admin" @if ($user->role == 'admin') selected @endif>admin</option>
              <option value="rt" @if ($user->rt == 'rt') selected @endif>rt</option>
              <option value="warga" @if ($user->warga == 'warga') selected @endif>warga</option>
            </select>
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
