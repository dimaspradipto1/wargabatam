<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Models\Kartukeluarga;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kartukeluarga $kartukeluarga)
    {
        $data=[
            'title'=>'DATA ANGGOTA KELUARGA',
            'menu'=>'ANGGOTA',
            'breadcrumb'=>'Anggota Keluarga',
            'anggota'=>$kartukeluarga->anggota,
            'warga'=>Warga::all()
        ];
        return view('pages.anggota.index', $data ,compact('kartukeluarga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kartukeluarga $kartukeluarga)
    {
        
        $data=[
            'title'=>'Anggota Keluarga',
            'menu'=>'ANGGOTA KELUARGA',
            'breadcrumb'=>'Tambah Anggota Keluarga',
            'kartukeluarga'=>$kartukeluarga,
            'warga'=>Warga::all()
        ];
        return view('pages.anggota.create',$data, compact('kartukeluarga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kartukeluarga $kartukeluarga)
    {;

        Anggota::create($request->all() + [
            'kartukeluarga_id' => $kartukeluarga->id,
        ]);

        alert()->success('Sukses','Data Berhasil Disimpan')->showConfirmButton('OK', '#218838')->autoclose('2000');
       
        return redirect()->route('kartukeluarga.anggota.index', $kartukeluarga->id);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kartukeluarga $anggota, $id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        alert()->success('Sukses','Data Berhasil Dihapus')->showConfirmButton('OK', '#218838')->autoclose('2000');
        return redirect()->route('kartukeluarga.anggota.index', $anggota->kartukeluarga_id);
    }

    
}
 