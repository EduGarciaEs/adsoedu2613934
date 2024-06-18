<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'tenis_id',
        'user_id',
    ];

    
    //Relationship: User has many tenis
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

     //Relationship: User has many tenis
     public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}



