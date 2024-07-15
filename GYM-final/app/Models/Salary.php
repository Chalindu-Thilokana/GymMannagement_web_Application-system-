<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'payment_duration',
        'trainer_id',
    ];
    public function trainer ()
    {
        return $this->belongsTo(Trainer::class);



    }

    
}