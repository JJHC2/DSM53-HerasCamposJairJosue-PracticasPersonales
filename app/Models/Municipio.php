<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estado;

class Municipio extends Model
{
    use HasFactory;

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
