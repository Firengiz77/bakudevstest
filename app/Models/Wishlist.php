<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    public function wishlist(){
        return $this->belongsTo('\App\Models\Kurs','kurslars_id');
    }

    protected $guarded = ['id'];

    protected $fillable=['user_id','kurslars_id'];
    
    protected $table='wishlists';
    



}
