<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keperluan extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function warga()
    {
        return $this->hasMany(Warga::class, 'id', 'keperluan_id');
    }

    public function suratpengantarrt()
    {
        return $this->hasMany(Suratpengantarrt::class, 'id', 'keperluan_id');
    }
}
