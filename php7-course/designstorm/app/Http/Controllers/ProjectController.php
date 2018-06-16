<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

  public function index() {
    return view('account/projects/index');
  }

    public function create() {
      return view('account/projects/create');
    }

    public function store() {
      return "store project";
    }

    public function show() {
      return view('account/projects/show');
    }

    public function edit() {
      return view('account/projects/edit');
    }

    public function update() {
      return "update project";
    }

    public function destroy() {
      return "delete project";
    }

}
