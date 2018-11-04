<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
//    protected $fillableStudy = [];
//
//    protected function getFillableStudy()
//    {
//        for ($i = 0; $i < 3; $i++) {
//            $this->fillableStudy += [
//                'datebeginstudy.{$i}',
//                'dateendstudy.{$i}',
//                'studyname.{$i}',
//                'professionstudy.{$i}',
//                'doctor.{$i}'
//            ];
//        }
//        return $this->fillableStudy;
//    }
//
//    protected $fillableWork = [];
//
//    protected function getFillableWork()
//    {
//        for ($i = 0; $i < 3; $i++) {
//            $this->fillableWork += [
//                'datebeginwork.{$i}',
//                'dateendwork.{$i}',
//                'workname.{$i}',
//                'professionwork.{$i}'
//            ];
//        }
//        return $this->fillableWork;
//    }

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
        'datebeginstudy1',
        'dateendstudy1',
        'studyname1',
        'professionstudy1',
        'doctor1',
        'datebeginstudy2',
        'dateendstudy2',
        'studyname2',
        'professionstudy2',
        'doctor2',
        'datebeginwork0',
        'dateendwork0',
        'workname0',
        'professionwork0',
        'datebeginwork1',
        'dateendwork1',
        'workname1',
        'professionwork1',
        'datebeginwork2',
        'dateendwork2',
        'workname2',
        'professionwork2',
        'interests',
        'photo'
    ];
}
