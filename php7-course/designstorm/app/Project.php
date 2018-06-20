<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'user_id', 'active'];

    public function insperations() {

      return $this->hasMany('App\Insperation');
    }
    public function deleteRelated() {
      $this->insperations()->delete();

      return parent::delete();
    }

    public function user() {
      return $this->belongsTo('App\User');
    }
}
