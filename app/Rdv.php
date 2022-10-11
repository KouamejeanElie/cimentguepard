<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    protected $fillable = [
   
        'nom', 
        'identite', 
        'contact',
        'emailrdv',
        'daterdv',
        'heurerdv',
        'service',
        'message'

    ];
}
