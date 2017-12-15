<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //

  // public function themes() {
  //   return $this->hasMany('App\Question');
  // }


public function questions() { return $this->hasMany('App\Question'); }

// public function questions() { return $this->hasMany('App\Theme'); }


    // public function question()
    // {
    //     return $this->hasOne('App\Question');
    // }
}
