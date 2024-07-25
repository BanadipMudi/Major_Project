<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    public function bookmark_question(){
        return $this->hasMany(Question::class,'id','questions_id');
    }
    public function bookmark_user(){
        return $this->hasMany(Newuser::class,'id','user_id');
    }
   


}
