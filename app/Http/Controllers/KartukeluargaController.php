<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Warga;
use Illuminate\Http\Request;
use App\Models\Kartukeluarga;
use Illuminate\Support\Facades\Auth;

class KartukeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Anggota $anggota)
    {
        $kartukeluarga = Auth::user()->role == 'admin'  || Auth::user()->role == 'rt' ? Kartukeluarga::all() : Kartukeluarga::where('kepala_keluarga', Auth::user()->name)->get();

       
        $anggota = Anggota::all();

        $data=[
            'title'=>'DATA KARTU KELUARGA',
            'menu'=> 'KARTU KELUARGA',
            'breadcrumb'=>'Kartu Keluarga',
            'kartukeluarga'=>$kartukeluarga,
            'warga'=>Warga::all(),
            'anggota'=>$anggota,
        ];
        return view('pages.kartukeluarga.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>'TAMBAH KARTU KELUARGA',
            'menu'=> 'KARTU KELUARGA',
            'breadcrumb'=>'TAMBAH KARTU KELUARGA',
            'kartukeluarga'=>Kartukeluarga::all(),
            'warga'=>Warga::all()
        ];
        return view('pages.kartukeluarga.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kartukeluarga::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan')->showConfirmButton('OK', '#218838')->autoclose('2000');
        return redirect('kartukeluarga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(Kartukeluarga $kartukeluarga)
    {
        $data=[
            'title'=>'DETAIL KARTU KELUARGA',
            'menu'=> 'KARTU KELUARGA',
            'breadcrumb'=>'DETAIL KARTU KELUARGA',
            'kartukeluarga'=> $kartukeluarga,
            'warga'=>Warga::all()
        ];
        return view('pages.kartukeluarga.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Kartukeluarga $kartukeluarga)
    {
        
        $data=[
            'title'=>'EDIT KARTU KELUARGA',
            'menu'=> 'KARTU KELUARGA',
            'breadcrumb'=>'EDIT KARTU KELUARGA',
            'kartukeluarga'=> $kartukeluarga,
            'warga'=>Warga::all()
        ];
        return view('pages.kartukeluarga.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kartukeluarga $kartukeluarga)
    {
        $kartukeluarga->update($request->all());
        alert()->success('Sukses','Data Berhasil Diupdate')->showConfirmButton('OK', '#218838')->autoclose('2000');
        return redirect('kartukeluarga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kartukeluarga $kartukeluarga)
    {
        $kartukeluarga->delete();
        alert()->success('Sukses','Data Berhasil Dihapus')->showConfirmButton('OK', '#218838')->autoclose('2000');
        return redirect('kartukeluarga');
    }
}
