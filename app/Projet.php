<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [

       'titre',
       'descriptifprojet',
       'image'

    ];
}
