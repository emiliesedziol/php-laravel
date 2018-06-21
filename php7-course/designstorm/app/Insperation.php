<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insperation extends Model
{
    protected $fillable = ['image_url', 'image_info', 'projectId', 'id'];

    public function project() {

      return $this>belongsTo('App\Project');
    }
}
