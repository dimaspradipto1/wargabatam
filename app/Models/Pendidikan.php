<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function warga()
    {
        return $this->hasMany(Warga::class, 'pendidikan_id', 'id');
    }
}
