<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartukeluarga extends Model
{
    use HasFactory;
    protected $guarded=[];

    
    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }

    public function kelahiran()
    {
        return $this->hasMany(Kelahiran::class);
    }

    public function suratpengantarrt()
    {
        return $this->hasMany(Suratpengantarrt::class);
    }
}
