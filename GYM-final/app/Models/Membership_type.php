<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'membership_type',
        'price',
        'facilities',
        'trainers',
        
        
    ];
    public function member()
    {
        return $this->hasMany(Member::class);



    }
}