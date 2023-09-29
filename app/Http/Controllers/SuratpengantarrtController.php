<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Keperluan;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use App\Models\Kartukeluarga;
use App\Models\Suratpengantarrt;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SuratpengantarrtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Keperluan $keperluan, Pekerjaan $pekerjaan, Pendidikan $pendidikan, Kartukeluarga $kartukeluarga, Warga $warga, Suratpengantarrt $suratpengantarrt)
    {
       

        $suratpengantarrt =  
        Auth::user()->role == 'admin' || Auth::user()->role == 'rt' ? suratpengantarrt::all() :
        Suratpengantarrt::join('wargas','warga_id', '=', 'suratpengantarrts.warga_id')
        ->select('suratpengantarrts.*', 'wargas.id')
        ->where('warga_nama', Auth::user()->name)
        ->get();
    

        $data=[
            'title'=>'DATA SURAT PENGANTAR RT',
            'menu'=>'Surat Pengantar RT',
            'breadcrumb'=>' Surat Pengantar RT',
            'suratpengantarrt'=>$suratpengantarrt,
            'keperluan'=>$keperluan,
            'pekerjaan'=>$pekerjaan,
            'pendidikan'=>$pendidikan,
            'kartukeluarga'=>$kartukeluarga,
            'warga'=>$warga,
        ];
        return view('pages.suratpengantarrt.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>'TAMBAH DATA SURAT PENGANTAR RT',
            'menu'=>'Surat Pengantar RT',
            'breadcrumb'=>'Surat Pengantar RT',
            'keperluan'=>Keperluan::all(),
            'warga'=>Warga::all(),
            'kartukeluarga'=>Kartukeluarga::all(),
            'pekerjaan'=>Pekerjaan::all(),
            
        ];
        return view('pages.suratpengantarrt.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        Suratpengantarrt::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan.')->showConfirmButton('Ok', '#218838')->autoClose(2000);
        return redirect('suratpengantarrt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suratpengantarrt  $suratpengantarrt
     * @return \Illuminate\Http\Response
     */
    public function show(Suratpengantarrt $suratpengantarrt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suratpengantarrt  $suratpengantarrt
     * @return \Illuminate\Http\Response
     */
    public function edit(Suratpengantarrt $suratpengantarrt)
    {
        $data=[
            'title'=>'EDIT DATA SURAT PENGANTAR RT',
            'menu'=>'Surat Pengantar RT',
            'breadcrumb'=>'Surat Pengantar RT',
            'keperluan'=>Keperluan::all(),
            'warga'=>Warga::all(),
            'kartukeluarga'=>Kartukeluarga::all(),
            'pekerjaan'=>Pekerjaan::all(),
            'suratpengantarrt'=>$suratpengantarrt,
        ];
        return view('pages.suratpengantarrt.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suratpengantarrt  $suratpengantarrt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suratpengantarrt $suratpengantarrt)
    {
        $suratpengantarrt->update($request->all());
        alert()->success('Sukses','Data Berhasil Diupdate.')->showConfirmButton('Ok', '#218838')->autoClose(2000);
        return redirect('suratpengantarrt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suratpengantarrt  $suratpengantarrt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suratpengantarrt $suratpengantarrt)
    {
        $suratpengantarrt->delete();
        alert()->success('Sukses','Data Berhasil Dihapus.')->showConfirmButton('Ok', '#218838')->autoClose(2000);
        return redirect()->route('suratpengantarrt.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suratpengantarrt  $suratpengantarrt
     * @return \Illuminate\Http\Response
     */
    public function cetak_pdf(Suratpengantarrt $suratpengantarrt,$id)
    {
        $suratpengantarrt = Auth::user()->role == 'admin' || Auth::user()->role == 'rt' ? Suratpengantarrt::findOrFail($id) : Suratpengantarrt::with('warga.suratpengantarrt')->where('warga_nama', Auth::user()->name)->findOrFail($id);        

        $suratpengantarrt = Suratpengantarrt::findOrFail($id);
        $warga = Warga::all();
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $kartukeluarga = Kartukeluarga::all();
        $keperluan = Keperluan::all();

        $data=[
            'title'=>'CETAK DATA SURAT PENGANTAR RT',
            'menu'=>'Surat Pengantar RT',
            'breadcrumb'=>'Surat Pengantar RT',
            'keperluan'=>$keperluan,
            'warga'=>$warga,
            'pekerjaan'=>$pekerjaan,
            'kartukeluarga'=>$kartukeluarga,
            'rt'=>$suratpengantarrt,
            'pendidikan'=>$pendidikan,
        ];
        
        // $pdf = PDF::loadview('pages.suratpengantarrt.cetak_pdf', $data);
        // return $pdf->download('surat-pengantar-rt.pdf');
        return view('pages.suratpengantarrt.cetak_pdf', $data);
    }
}
