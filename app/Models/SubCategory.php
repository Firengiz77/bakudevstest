<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    public function subcat(){
        
        return $this->belongsTo('\App\Models\Category','category_id');
        
    }



}
