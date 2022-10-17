<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurs extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function kcat(){
        return $this->belongsTo('\App\Models\SubCategory','subcategory_id');
    }


    public function getImageUrlAttribute()
    {
        return $this->images()->value('image');
    }

}
