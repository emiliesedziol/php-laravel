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
      // 'https://api.behance.net/v2/projects?q=dog&client_id=oDlfZpUkt2LxvuOuymMieOpTCXUUMQvR';
      $client = new Client();
      $searchForThis = $request->searchForThis;

      $res = $client->request('GET',
        "https://api.behance.net/v2/projects",
        ["query" => [
          "q"=>$request->searchForThis,
          "client_id" => "oDlfZpUkt2LxvuOuymMieOpTCXUUMQvR"
          ]]);

      $data = $res->getBody();
      $data = json_decode($data);
      $filteredData = [];

      // return $data->projects;
      foreach($data->projects as $project) {
        $fields = $project->fields;

        if(in_array("UI/UX", $fields) || in_array("Web Design", $fields)) {
          array_push($filteredData, $project);
        }
      }

//      return count($filteredData);

      $user = Auth::user();
      return view('pages/results', compact('user', 'filteredData', 'searchForThis'));
    }
}
