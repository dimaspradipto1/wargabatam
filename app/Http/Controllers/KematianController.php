<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Kematian;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title'=>'DATA KEMATIAN',
            'menu'=>'KEMATIAN',
            'breadcrumb'=>'Data Kematian',
            'kematian'=>Kematian::all(),
            'warga'=>Warga::all(),
        ];
        return view('pages.kematian.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>'TAMBAH DATA KEMATIAN',
            'menu'=>'KEMATIAN',
            'breadcrumb'=>'Tambah Data Kematain',
            'warga'=>Warga::all(),
        ];
        return view('pages.kematian.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kematian::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan')->showConfirmButton('OK', '#218838');
        return redirect('kematian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function show(Kematian $kematian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function edit(Kematian $kematian)
    {
        $data=[
            'title'=>'EDIT DATA KEMATIAN',
            'menu'=>'KEMATIAN',
            'breadcrumb'=>'Edit Data Kematain',
            'kematian'=>$kematian,
            'warga'=>Warga::all(),
        ];
        return view('pages.kematian.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kematian $kematian)
    {
        $kematian->update($request->all());
        alert()->success('Sukses','Data Berhasil Diupdate')->showConfirmButton('OK', '#218838');
        return redirect('kematian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kematian $kematian)
    {
        $kematian->delete();
        alert()->success('Sukses','Data Berhasil Dihapus')->showConfirmButton('OK', '#218838');
        return redirect('kematian');
    }
}
