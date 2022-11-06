<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    public function promotion()
    {
        return $this->belongsTo(promotion::class);
    }


    use HasFactory;
}
