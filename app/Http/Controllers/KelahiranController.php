<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Kelahiran;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title' => 'DATA KELAHIRAN',
            'menu' => 'KELAHIRAN',
            'breadcrumb' => 'Kelahiran',
            'kelahiran' => Kelahiran::all(),
            'warga'=> Warga::all(),
            'kartukeluarga'=> KartuKeluarga::all()
        ];
        return view('pages.kelahiran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title' => 'TAMBAH DATA KELAHIRAN',
            'menu' => 'KELAHIRAN',
            'breadcrumb' => 'Kelahiran',
            'kartukeluarga'=> KartuKeluarga::all(),
        ];
        return view('pages.kelahiran.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelahiran::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan.')->showConfirmButton('Ok', '#218838')->autoClose(2000);
        return redirect('kelahiran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function show(Kelahiran $kelahiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelahiran $kelahiran)
    {
        $data=[
            'title' => 'EDIT DATA KELAHIRAN',
            'menu' => 'KELAHIRAN',
            'breadcrumb' => ' Edit Kelahiran',
            'kelahiran' => $kelahiran,
            'kartukeluarga'=> KartuKeluarga::all(),
        ];
        return view('pages.kelahiran.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelahiran $kelahiran)
    {
        $kelahiran->update($request->all());
        alert()->success('Sukses','Data Berhasil Diubah.')->showConfirmButton('Ok', '#218838')->autoClose(2000);
        return redirect('kelahiran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelahiran $kelahiran)
    {
        $kelahiran->delete();
        alert()->success('Sukses','Data Berhasil Dihapus.')->showConfirmButton('Ok', '#218838')->autoClose(2000);
        return redirect('kelahiran');
    }
}
