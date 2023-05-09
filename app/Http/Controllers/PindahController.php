<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Pindah;
use Illuminate\Http\Request;

class PindahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title'=>'Data Pindah',
            'menu'=>'PINDAH',
            'breadcrumb'=>'Pindah',
            'pindah'=>Pindah::all(),
            'warga'=>Warga::all()
        ];
        return view('pages.pindah.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>'Tambah Data Pindah',
            'menu'=>'PINDAH',
            'breadcrumb'=>'Tambah Pindah',
            'warga'=>Warga::all()
        ];
        return view('pages.pindah.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pindah::create($request->all());
        alert()->success('Berhasil.','Data telah ditambahkan!')->showConfirmButton('Ok', '#218838');
        return redirect('pindah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pindah  $pindah
     * @return \Illuminate\Http\Response
     */
    public function show(Pindah $pindah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pindah  $pindah
     * @return \Illuminate\Http\Response
     */
    public function edit(Pindah $pindah)
    {
        $data=[
            'title'=>'Edit Data Pindah',
            'menu'=>'PINDAH',
            'breadcrumb'=>'Edit Pindah',
            'pindah'=>$pindah,
            'warga'=>Warga::all()
        ];
        return view('pages.pindah.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pindah  $pindah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pindah $pindah)
    {
        $pindah->update($request->all());
        alert()->success('Berhasil.','Data telah diubah!')->showConfirmButton('Ok', '#218838');
        return redirect('pindah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pindah  $pindah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pindah $pindah)
    {
        $pindah->delete();
        alert()->success('Berhasil.','Data telah dihapus!')->showConfirmButton('Ok', '#218838');
        return redirect('pindah');
    }
}
