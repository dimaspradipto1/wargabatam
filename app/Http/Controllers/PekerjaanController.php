<?php

namespace App\Http\Controllers;


use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Alert;


class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title'=>' DATA PEKERJAAN',
            'menu'=>'Data Lainnya',
            'breadcrumb'=>'Pekerjaan',
            'pekerjaan'=>Pekerjaan::all()
        ];
        return view('pages.pekerjaan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>' TAMBAH PEKERJAAN',
            'menu'=>'Data Lainnya',
            'breadcrumb'=>'Pekerjaan',
        ];
        return view('pages.pekerjaan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pekerjaan::create($request->all());
        alert()->success('Berhasil', 'Data berhasil ditambahkan.')->showConfirmButton('OK', '#218838');
        return redirect('pekerjaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pekerjaan $pekerjaan)
    {
        $data=[
            'title'=>' EDIT PEKERJAAN',
            'menu'=>'Data Lainnya',
            'breadcrumb'=>'Pekerjaan',
            'pekerjaan'=>$pekerjaan
        ];
        return view('pages.pekerjaan.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        $pekerjaan->update($request->all());
        alert()->success('Berhasil', 'Data berhasil diubah.')->showConfirmButton('OK', '#218838');
        return redirect('pekerjaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pekerjaan $pekerjaan)
    {
        $pekerjaan->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus.')->showConfirmButton('OK', '#218838');
        return redirect('pekerjaan');
    }
}
