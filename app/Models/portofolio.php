<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portofolio extends Model
{
    use HasFactory;
    protected $table='portofolio';
    protected $guarded=[];

    public function Dokumentasi()
    {
        return $this->hasMany(dokumentasi::class,'id_proyek','id');
    }
}
