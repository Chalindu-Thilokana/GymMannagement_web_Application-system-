<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'description_activity',
        'valid_time',
        'bmi',
        'helth_condition',
        'trainer_id',
        'member_id',
        'shedule',

    ];
    public function member()
    {
        return $this->belongsTo(Member::class);



    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);

    }



}