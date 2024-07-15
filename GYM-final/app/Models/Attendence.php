<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;

    protected $fillable = [
       
       'member_id',
       //'Schedule_day',
       'day',
      
       
    ];



    public function Member()
    {
        return $this->belongsTo(Member::class,'member_id');



    }

    
}