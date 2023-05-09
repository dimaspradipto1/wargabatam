<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Pendatang;
use Illuminate\Http\Request;

class PendatangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data=[
            'title'=>'DATA PENDATANG',
            'menu'=>'PENDTANG',
            'breadcrumb'=>'PENDATANG',
            'pendatang'=>Pendatang::all()
        ];
        return view('pages.pendatang.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>'TAMBAH DATA PENDATANG',
            'menu'=>'PENDTANG',
            'breadcrumb'=>'PENDATANG',
            'pendatang'=>Pendatang::all(),
            'warga'=>Warga::all()
        ];
        return view('pages.pendatang.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendatang::create($request->all());
        alert()->success('Berhasil','Data Pendatang Berhasil Ditambahkan')->showConfirmButton('OK', '#218838');
        return redirect()->route('pendatang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendatang  $pendatang
     * @return \Illuminate\Http\Response
     */
    public function show(Pendatang $pendatang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendatang  $pendatang
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendatang $pendatang)
    {
        $data=[
            'title'=>'EDIT DATA PENDATANG',
            'menu'=>'PENDTANG',
            'breadcrumb'=>'PENDATANG',
            'pendatang'=>$pendatang,
            'warga'=>Warga::all()
        ];
        return view('pages.pendatang.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendatang  $pendatang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendatang $pendatang)
    {
        $pendatang->update($request->all());
        alert()->success('Berhasil','Data Pendatang Berhasil Diubah')->showConfirmButton('OK', '#218838');
        return redirect()->route('pendatang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendatang  $pendatang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendatang $pendatang)
    {
        $pendatang->delete();
        alert()->success('Berhasil','Data Pendatang Berhasil Dihapus')->showConfirmButton('OK', '#218838');
        return redirect()->route('pendatang.index');
    }
}
