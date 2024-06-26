<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'manufacturer',
        'releasedate',
        'description',
       
    ];

    // Rela
    public function tenis(){
        return $this->belongsTo('App\Models\Tenis');
        }
}
