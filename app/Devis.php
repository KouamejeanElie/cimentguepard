<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $fillable = [
    
     'nom',
     'identite',
     'contact',
     'emaildevis',
     'service',
     'message'

    ];
}
