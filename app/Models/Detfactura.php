<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detfactura extends Model
{
    use HasFactory;

    public function facturas(){ 
        return $this->belongsTo(Factura::class); 
    }  
}
