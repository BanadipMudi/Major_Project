<?php

namespace App\Models;
use Carbon\Carbon as carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    public function getCreatedAtAttribute($value){
        $carbontime=carbon::parse($value);
        return $carbontime->diffForHumans();
    }

    public function question(){
        return $this->belongsTo(Question::class,'question_id','q_id');
       }
    public function user(){
        return $this->belongsTo(Newuser::class,'user_id');
       }

       public function setRecordsAttribute($value){
        $this->attributes['records']=json_encode($value);
    }
    public function getRecordsAttribute($value){
        return json_decode($value,true);
    }
    
}
