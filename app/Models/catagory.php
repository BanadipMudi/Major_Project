<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;
    protected $table='catagorys';

    // public function subcatagory(){
    //     return $this->hasMany(subcatagory::class,'catagorys_id','id');
    // }

    
}
