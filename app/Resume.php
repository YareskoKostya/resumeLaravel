<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'birthdate',
        'country',
        'tel',
        'email',
        'address',
        'interests'
    ];
}
