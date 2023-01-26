<?php

namespace App\Models;

use App\Models\Draft;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];
    
    use HasFactory;

    public function draft()
    {
        return $this->belongsTo(Draft::class);
    }
}
