<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title'];

    public function insperations() {

      return $this->hasMany('App\Insperation');
    }
}
