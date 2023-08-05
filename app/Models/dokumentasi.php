<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumentasi extends Model
{
    use HasFactory;
    protected $table='dokumentasi';
    protected $guarded=[];

    public function Portofolio()
    {
        return $this->belongsTo(portofolio::class);
    }
}
