<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Auth;

class ProjectController extends Controller
{

  public function index() {
    $projects = Project::where('user_id', Auth::id())->get();
    // return $projects;
    return view('account/projects/index', compact('projects'));
  }

    public function create() {
      return view('account/projects/create');
    }

    public function store(Request $request) {

      $project = new Project();

      $project::create([
        "title" => $request->title,
        "user_id" => Auth::id(),
        "active" => 1
      ]);

      return redirect('account/projects');
    }

    public function show($id) {
      $project = Project::where('id', $id)->first();
    //  return $project;
      return view('account/projects/show', compact('project'));
    }

/*    public function edit($id) {

      $project = Project::where('id', $id)->get();
    //  return $project;
      return view('account/projects/edit', compact('project'));
    }  */
    public function edit($id){
    $project = Project::where('id', $id)->first();

    return view('account/projects/edit', compact('project'));
  }

    public function update(Request $request, $id) {

        Project::where('id', $id)->where('user_id', Auth::id())->update(['title' => $request->title]);


    //  return $request;
      return back();
    }

    public function destroy($id) {
      $project = Project::where('id', $id)->first();
      if ($project->user_id == Auth::id()) {
        $project->deleteRelated();
      }
      // always redirect to account/projects
      return redirect('account/projects');

    }

}
