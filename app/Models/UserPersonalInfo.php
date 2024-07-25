<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalInfo extends Model
{
    use HasFactory;
    public function setEducationCredentialAttribute($value){
        $this->attributes['education_credential']=json_encode($value);
    }
    public function setEmploymentCredentialAttribute($value){
        $this->attributes['employment_credential']=json_encode($value);
    }
    public function setLocationCredentialAttribute($value){
        $this->attributes['location_credential']=json_encode($value);
    }
    public function setSocialmediaCredentialAttribute($value){
        $this->attributes['socialmedia_credential']=json_encode($value);
    }


    public function getEducationCredentialAttribute($value){
            return json_decode($value,true);
    }
    public function getEmploymentCredentialAttribute($value){
            return json_decode($value,true);
    }
    public function getLocationCredentialAttribute($value){
            return json_decode($value,true);
    }
    public function getSocialmediaCredentialAttribute($value){
            return json_decode($value,true);
    }
   
}
