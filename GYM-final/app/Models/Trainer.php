<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'full_name',
        'last_name',
        'age',
        'email',
        'gender',
        'address',
        'traning_careers',
        'work_experience',
        'mobile_phone_number',
        'land_phone_number',
        'password',
        'user_id',
        
    ];
    public function salary()
    {
        return $this->hasMany(Salary::class);



    }
    public function shedule()
    {
        return $this->hasMany(Shedule::class);



    }

    public function member()
    {
        return $this->hasMany(Member::class);



    }
    public function user()
    {
        return $this->belongsTo(User::class);



    }




}