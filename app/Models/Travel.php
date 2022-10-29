<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    protected $fillable = [
        'typeTravel',
        'dateTravel',
        'timeTravel',
        'fareTravel',
        'idDeparture',
        'idArrival',
        'idBus'
    ];
}


