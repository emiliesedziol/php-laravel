<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;


// public function __construct()
//    {
//        $this->middleware('auth');
//    }

class PageController extends Controller
{
    public function index() {
      $user = Auth::user();
      return view('pages/home', compact('user'));
    }

    public function results(request $request) {

      $keyword = $request->keyword;

      return redirect("search/".$keyword);
    }

    public function search(request $request, $keyword) {
      $client = new Client();

      $res = $client->request('GET',
        "https://api.behance.net/v2/projects",
        ["query" => [
          "q"=>$request->keyword,
          "client_id" => env("BEHANCE_KEY")
          ]]);

      $data = $res->getBody();
      $data = json_decode($data);
      $filteredData =[];

      foreach($data->projects as $project) {
        $fields = $project->fields;
        if (in_array("Web Design", $fields)) {
          $filteredData[] = $project;
        }
      }

//  return $filteredData;

      $user = Auth::user();
      return view('pages/results', compact('user', 'filteredData', 'keyword'));
    }
}
