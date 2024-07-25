<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon as carbon;


class Question extends Model
{
    use HasFactory;
    protected $primaryKey = 'q_id';
    public function Newuser(){
        return $this->belongsTo(Newuser::class,'user_id');
    }
    
    public function getCreatedAtAttribute($value){
        $carbontime=carbon::parse($value);
        return $carbontime->diffForHumans();
    }
/////---------------------------------------------
    public function catagory()
        {
            return $this->belongsTo(catagory::class);
        }

    public function subcatagory()
    {
        return $this->belongsTo(subcatagory::class,'subcatagory_id','subcatagorys_id');
        //first paarmeter takes related model name
        //second parameter takes the foreign key of outher model whrer you define relation
        // third takes the primary key of related model
    }
    public function answers()
    {
        return $this->hasMany(Answer::class,'question_id');
    }
    public function setRecordsAttribute($value){
        $this->attributes['records']=json_encode($value);
    }
    public function getRecordsAttribute($value){
        return json_decode($value,true);
    }
    // here i want to store catagory name insted of catagory id ....done 
    // public function setCatagoryIdAttribute($value){
    //     $catagory_name=catagory::find($value);
    //     $this->attributes['catagory_id']=$catagory_name->catagory_name;
    // }
    public function getCatagoryIdAttribute($value){
        $catagory_name=catagory::find($value);
        return $catagory_name->catagory_name;
    }

    public function getSubcatagoryIdAttribute($value){
        return subcatagory::where('subcatagorys_id', '=', $value)->value('name');
    }
  //-----------------
  public function getIdAttribute()
  {
      return $this->attributes['q_id'];
  }
  public function setIdAttribute($value)
  {
      $this->attributes['q_id'] = $value;
  }

  function qusdata(){
    return $this->hasMany('App\Models\Answer','question_id','q_id');
 }
}
