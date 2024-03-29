<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dersler extends Model
{
    use HasFactory;

    public function subcat(){
        return $this->belongsTo('\App\Models\Kurs','kurs_id');
    }
    

    public function getImageUrlAttribute()
    {
        return $this->images()->value('video');
    }



}
