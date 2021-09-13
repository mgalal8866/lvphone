<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
  protected $fillable = [
        'province',
        'user_id',
        'gender',
        'bio',
        'facebook'
    ];
 public function user(){
      return $this->belongsto('App\Models\User','user_id');
    }
    use HasFactory;
    
}

