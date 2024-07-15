<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'last_name',
        'age',
        'email',
        'password',
        'gender',
        'address',
        'BMI',
        'weight',
        'height',
        'membership_type_id',
        'mobile_phone_number',
        'land_phone_number',
        'user_id',
        'trainer_id',
        'perpose',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);



    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);



    }
    

    public function payment()
    {
        return $this->hasMany(Payment::class);



    }

    public function shedule()
    {
        return $this->hasMany(Shedule::class);



    }
    public function membership_type()
    {
        return $this->belongsTo(Membership_type::class);



    }
    public function memberspakage()
    {
        return $this->belongsTo(Memberspakage::class);



    }

    public function attendence()
    {
        return $this->hasMany(Attendence::class);



    }
    public function attemp()
    {
        return $this->hasMany(Attemp::class);



    }







}