<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberspakage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'membership_type',
        'price',
        
        
    ];
    public function member()
    {
        return $this->hasMany(Member::class);



    }

}