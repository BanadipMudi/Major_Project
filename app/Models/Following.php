<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    use HasFactory;

    public function getFollowingIdAttribute($value){
        $name=Newuser::where('u_id',$value)->value('user_name');
        $followers_number=Following::where('user_id',$value)->count();
        return $name."_".$followers_number."_".$value;
    }

    public function getUserIdAttribute($value){
        $name=Newuser::where('u_id',$value)->value('user_name');
        $followers_number=Following::where('user_id',$value)->count();
        return $name."_".$followers_number."_".$value;
    }
}
