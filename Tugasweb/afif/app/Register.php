<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = [
        'name', 'birthdate', 'birthplace', 'phone', 'gender', 'option', 'photo'
    ];
}
