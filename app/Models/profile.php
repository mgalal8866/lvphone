<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
  protected $table = 'profile';
  protected $fillable = [
        'province',
        'user_id',
        'gender',
        'bio',
        'facebook'
    ];
    /**
     * Get the user that owns the profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
   // public function user(){
    //  return $this->belongsTo('app\Models\User','user_id');
    //}

    use HasFactory;
    
}

