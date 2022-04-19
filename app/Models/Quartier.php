<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;
    public function region(){
        return $this->belongTo(region::class);
    }
    public function propriete()
    {
        return $this->hasmany(propriete::class);
    }
}
