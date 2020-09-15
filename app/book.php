<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    protected $fillable=['name','ISBN','pages','price','published_at'];



}
