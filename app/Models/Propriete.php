<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;
    public function proprietaire()
    {
        return $this->belongTo(proprietaire::class);
    }
    public function type_propriete()
    {
        return $this->hasmany(type_propriete::class);
    }
    public function quartier()
    {
        return $this->belongTo(quartier::class);
    }
}
