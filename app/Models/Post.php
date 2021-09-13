<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'photo',
        'slug'
    ];
    use HasFactory;
}
