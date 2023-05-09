<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }

    public function kartukeluarga()
    {
        return $this->belongsTo(Kartukeluarga::class);
    }
}
