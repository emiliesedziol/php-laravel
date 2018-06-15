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
          "client_id" => "oDlfZpUkt2LxvuOuymMieOpTCXUUMQvR",
          "fields" => "Web_Design"
          ]]);

      $data = $res->getBody();
      $data = json_decode($data);
      // to filter the data to include only (array) fields with 'Web Design' in the array
      // the following works, need to find out if there is another way

      foreach($data->projects as $project) {
        $fields = $project->fields;
//        echo '<pre>';print_r($fields);echo '</pre>';
        if (in_array("Web Design", $fields)) {
//          echo "Web Design found";
          $filteredData[] = $project;
        }
        // var_dump($fields);
    /*    if (in_array("Web Design", $fields)) {
          array_push($filteredData, $project);
        } */
      }

// return $filteredData;

      $user = Auth::user();
      return view('pages/results', compact('user', 'filteredData', 'searchForThis', 'fieldsReturned'));
    }
}
