<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardmodel extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo('App\Models\Category',);
    }
    public function subimages(){
       return $this->hasMany('App\Models\Subimage');
   }
}
