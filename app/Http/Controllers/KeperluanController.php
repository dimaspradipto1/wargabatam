<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Keperluan;
use Illuminate\Http\Request;

class KeperluanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title'=>'DATA KEPERLUAN',
            'menu'=> 'KEPERLUAN',
            'breadcrumb'=> 'Keperluan',
            'keperluan'=>Keperluan::all()
        ];
        return view('pages.keperluan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>'TAMBAH DATA KEPERLUAN',
            'menu'=> 'KEPERLUAN',
            'breadcrumb'=> 'Keperluan',
        ];
        return view('pages.keperluan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'keperluan' => 'required',
        ]);
    
        Keperluan::create($request->all());
        alert()->success('Berhasil.','Data telah ditambahkan!')->showConfirmButton('OK', '#218838');
        return redirect('keperluan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function show(Keperluan $keperluan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keperluan $keperluan)
    {
        $data=[
            'title'=>'EDIT DATA KEPERLUAN',
            'menu'=> 'KEPERLUAN',
            'breadcrumb'=> 'Keperluan',
            'keperluan'=>$keperluan,
            'warga'=>Warga::all()
        ];
        return view('pages.keperluan.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keperluan $keperluan)
    {
        $keperluan->update($request->all());
        alert()->success('Berhasil.','Data telah diubah!')->showConfirmButton('OK', '#218838');
        return redirect('keperluan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keperluan $keperluan)
    {
        $keperluan->delete();
        alert()->success('Berhasil.','Data telah dihapus!')->showConfirmButton('OK', '#218838');
        return redirect('keperluan');
    }
}
