<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Suratpengantarrt extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'id');
    }

    public function kartu_keluarga()
    {
        return $this->belongsTo(KartuKeluarga::class, 'kartu_keluarga_id', 'id');
    }

    public function keperluan()
    {
        return $this->belongsTo(Keperluan::class, 'keperluan_id', 'id');
    }

    

}
