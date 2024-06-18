<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenis extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'image',
        'developer',
        'releasedate',
        'category_id',
        'user_id',
        'price',
        'genre',
        'slider',
        'description',

    ];

    // Relationship: Tenis belongs to user
    public function user(){
        return $this->belongsTo('App\Models\User');
        }

    // Relationship: Tenis belongs to category
    public function category(){
        return $this->belongsTo('App\Models\Category');
        }

     // Relationship: Tenis belongs to collection
     public function collection(){
        return $this->belongsTo('App\Models\Collection');
        }


}
