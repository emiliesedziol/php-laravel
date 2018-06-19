<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insperation;

class InsperationController extends Controller
{
    public function create(Request $request, $image_info) {
    //  return $request;
      $saveData = [
        "image_info" => $image_info,
        "image_url" => $request->image_url,
        "project_id" => 1
      ];
      $insperation = Insperation::create($saveData);
      return 'save the Data';
    }
}
