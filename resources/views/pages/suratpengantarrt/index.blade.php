@extends('layouts.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="{{ route('suratpengantarrt.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
      {{-- <a href="{{ url('cetak_pdf') }}" class="btn btn-danger"><i class="bi bi-printer"></i>
        Cetak
        PDF</a> --}}
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="table" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>NO Surat</th>
              {{-- <th>NIK</th> --}}
              <th>Nama Warga</th>
              {{-- <th>Keperluan</th> --}}
              <th>cetak</th>
              @if (Auth::user()->role == 'admin' || Auth::user()->role == 'rt')
                <th>Aksi</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach ($suratpengantarrt as $rt)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $rt->no_surat }}</th>
                {{-- <th>{{ $rt->kartu_keluarga->no_kk }}</th> --}}
                {{-- <th>{{ $rt->warga->nik }}</th> --}}
                <th>{{ $rt->warga_nama }}</th>
                {{-- <th>{{ $rt->keperluan->keperluan }}</th> --}}

                <th>
                  <a href="{{ route('cetak_pdf', $rt->id) }}" class="btn btn-dark text-white my-2"><i
                      class="bi bi-printer"></i></a>
                </th>
                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'rt')
                  <th>
                    <a href="suratpengantarrt/{{ $rt->id }}/edit" class="btn btn-warning text-white my-2"><i
                        class="bi bi-pencil"></i></a>

                    <form action="suratpengantarrt/{{ $rt->id }}" method="POST" class="d-inline">
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
