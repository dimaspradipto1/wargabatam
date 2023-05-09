<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function kartukeluarga()
    {
        return $this->hasMany(Kartukeluarga::class);
    }

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }

    public function suratpengantarrt()
    {
        return $this->hasMany(Suratpengantarrt::class);
    }

    public function keperluan()
    {
        return $this->hasMany(Keperluan::class);
    }
}
