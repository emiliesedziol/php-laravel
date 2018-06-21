<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insperation;
use App\Project;
use Auth;


class InsperationController extends Controller
{
    public function create(Request $request, $image_info, $projectId) {
    //  $project = Project::where('user_id', Auth::id())->first();
    $project = Project::where('id', $projectId)->get();
//    return " image controller ".$projectId;
      if ($project == null )  {
        return redirect('account/projects/create');
      }
      else {
        $saveData = [
          "image_info" => $image_info,
          "image_url" => $request->image_url,
          "project_id" => $projectId
        ];
        $imagesForAProject = new Insperation;
        $imagesForAProject->image_url = $request->image_url;
        $imagesForAProject->image_info = $image_info;
        $imagesForAProject->project_id = $projectId;
        $imagesForAProject->save();
    //    $insperation = Insperation::create($saveData);

        return back();
    }
    }

    public function destroy($image_info) {
      $insperation = Insperation::where('image_info', $image_info);
      $insperation->delete();
      return back();

    }
}
