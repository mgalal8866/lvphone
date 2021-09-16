<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
  protected $fillable = [
        'tag'
    ];
    public function post() 
    {
        return $this->belongsToMany(Post::class);
    }
    use HasFactory;
}
