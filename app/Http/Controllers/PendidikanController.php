<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title'=>' DATA PENDIDIKAN',
            'menu'=>'Data Lainnya',
            'breadcrumb'=>'Pendidikan',
            'pendidikan'=>Pendidikan::all()
        ];
        return view('pages.pendidikan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>' TAMBAH PENDIDIKAN',
            'menu'=>'Data Lainnya',
            'breadcrumb'=>'Pendidikan',
        ];
        return view('pages.pendidikan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendidikan::create($request->all());
        alert()->success('Berhasil', 'Data berhasil ditambahkan.')->showConfirmButton('OK', '#218838');
        return redirect('pendidikan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendidikan $pendidikan)
    {
        $data=[
            'title'=>' EDIT PENDIDIKAN',
            'menu'=>'Data Lainnya',
            'breadcrumb'=>'Pendidikan',
            'pendidikan'=>$pendidikan
        ];
        return view('pages.pendidikan.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $pendidikan->update($request->all());
        alert()->success('Berhasil', 'Data berhasil diubah.')->showConfirmButton('OK', '#218838');
        return redirect ('pendidikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus.')->showConfirmButton('OK', '#218838');
        return redirect('pendidikan');
    }
}
