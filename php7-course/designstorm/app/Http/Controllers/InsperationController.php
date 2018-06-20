<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insperation;
use App\Project;
use Auth;


class InsperationController extends Controller
{
    public function create(Request $request, $image_info) {
      $project = Project::where('user_id', Auth::id())->first();
      if ($project == null )  {
        return redirect('account/projects/create');
      }
      else {

        $saveData = [
          "image_info" => $image_info,
          "image_url" => $request->image_url,
          "project_id" => $project->id
        ];
        $insperation = Insperation::create($saveData);
        return back();
    }
    }

    public function destroy($image_info) {
      $insperation = Insperation::where('image_info', $image_info);
      $insperation->delete();
      return back();

    }
}
