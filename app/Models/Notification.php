<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon as carbon;

class Notification extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($value)
    {
        $carbontime=carbon::parse($value);
        return $carbontime->diffForHumans();
    }
}
