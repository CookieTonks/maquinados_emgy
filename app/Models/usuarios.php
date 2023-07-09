<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'cliente', 'id');
    }
}
