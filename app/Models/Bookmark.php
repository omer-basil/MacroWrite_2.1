<?php

namespace App\Models;

use App\Models\Draft;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function draft()
    {
        return $this->belongsTo(Draft::class);
    }
}
