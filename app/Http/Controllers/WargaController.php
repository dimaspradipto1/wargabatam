<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pendidikan $pendidikan, Pekerjaan $pekerjaan)
    {
        $data=[
            'title'=>'Data Warga',
            'menu'=>'WARGA',
            'breadcrumb'=>'Warga',
            'warga'=>Warga::all(),
            'pekerjaan'=>$pekerjaan,
            'pendidikan'=>$pendidikan,
        ];
        return view('pages.warga.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>'Tambah Data Warga',
            'menu'=>'WARGA',
            'breadcrumb'=>'Warga',
            'pekerjaan'=>Pekerjaan::all(),
            'pendidikan'=>Pendidikan::all(),
        ];
        return view('pages.warga.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Warga::create($request->all());
        alert()->success('Berhasil','Data Telah Ditambahkan')->showConfirmButton('confirm', '#218838');
        return redirect('warga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        $data=[
            'title'=>'Detail Data Warga',
            'menu'=>'WARGA',
            'breadcrumb'=>'Warga',
            'warga'=>$warga,
            'pekerjaan'=>Pekerjaan::all(),
            'pendidikan'=>Pendidikan::all(),
        ];
        return view('pages.warga.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit(Warga $warga)
    {
        
        $data=[
            'title'=>'Edit Data Warga',
            'menu'=>'WARGA',
            'breadcrumb'=>'Warga',
            'warga'=>$warga,
            'pekerjaan'=>Pekerjaan::all(),
            'pendidikan'=>Pendidikan::all(),
        ];
        return view('pages.warga.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warga $warga)
    {
        $warga->update($request->all());
        alert()->success('Berhasil','Data Telah Diubah')->showConfirmButton('confirm', '#218838');
        return redirect('warga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warga $warga)
    {
        $warga->delete();
        alert()->success('Berhasil','Data Telah Dihapus')->showConfirmButton('confirm', '#218838');
        return redirect('warga');
    }
}
