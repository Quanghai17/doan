<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function parent()
    {
        return $this->belongsTo(Blog::class, 'parent_id', 'id');
    }
    public function child()
    {
        return $this->hasMany(Blog::class, 'parent_id', 'id');
    }
}
