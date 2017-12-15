<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoty extends Model
{
    //

        //       public function questions()
    // {
        // return $this->hasMany('App\Question');
       // $role = $this->hasOne('App\Question', 'question_topic_id', 'id');
       //  // return $this->hasMany('App\Question','id','question_topic_id');
       //  // return $this->belongsTo('App\Question', 'question_topic_id');

       //  dump($role);
    // }


public function questions() {
    return $this->hasMany('App\Topic');
}

}
