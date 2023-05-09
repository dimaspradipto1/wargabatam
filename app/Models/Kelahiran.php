<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }

    public function kartukeluarga()
    {
        return $this->belongsTo(KartuKeluarga::class);
    }
}
