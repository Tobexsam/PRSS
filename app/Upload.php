<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //

    protected $uploads = '/images/';

    public function getPhotoAttribute($image){

        return $this->uploads.$image;

    }
    //
    protected $fillable = [

        'token','file', 'name','staff_id'
    ];

}
