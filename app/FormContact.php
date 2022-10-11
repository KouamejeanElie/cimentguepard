<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormContact extends Model
{
    protected $fillable = [

          'nom',
          'email',
          'services',
          'message'
    ];
}
