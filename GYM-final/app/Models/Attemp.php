<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attemp extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'member_id',
        //'Schedule_day',
        'day',
        
     ];




     public function member()
{
    return $this->belongsTo(Member::class);



}
}