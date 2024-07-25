<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newuser extends Model
{
    use HasFactory;
    protected $primaryKey = 'u_id';
    public function setNameAttribute($value){
        $this->attributes['user_name']=ucwords($value);
    }

    public function Question(){
        return $this->hasMany(Question::class,'user_id');
    }
    public function getNameAttribute()
    {
        return $this->attributes['user_name'];
    }
//-------------------------------------
    // public function catagory(){
    //     return $this->hasMany(catagory::class);
    // }
    // public function subcatagory(){
    //     return $this->hasMany(subcatagory::class,'catagorys_id','id');
    // }
    public function getIdAttribute()
    {
        return $this->attributes['u_id'];
    }
    public function setIdAttribute($value)
    {
        $this->attributes['u_id'] = $value;
    }
}
