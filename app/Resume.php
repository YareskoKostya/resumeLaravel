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
        'datebeginstudy0',
        'dateendstudy0',
        'studyname0',
        'professionstudy0',
        'doctor0',
        'datebeginwork',
        'dateendwork',
        'workname',
        'professionwork',
        'interests',
        'photo'
    ];
}
