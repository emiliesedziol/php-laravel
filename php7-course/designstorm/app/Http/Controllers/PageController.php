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

    //  The following works with the foreach loop
        $res = $client->request('GET',
        "https://api.behance.net/v2/projects",
        ["query" => [
          "q"=>$request->searchForThis,
          "client_id" => env("BEHANCE_KEY")
          ]]);

// the following has a problem
// $res = $client->request('GET', "https://api.behance.net/v2/projects?q=".urlencode($searchForThis) ."&client_id=".env("BEHANCE_KEY")."&field=".urlencode("web design"));
//      $res = client->request('GET',
//        "https://api.behance.net/v2/projects?q=".urlencode($searchForThis)
//        ."&client_id=".env("BEHANCE_KEY")."&fields=".urlencode("web design"));
      $data = $res->getBody();
      $data = json_decode($data);
      $filteredData =[];

      // to filter the data to include only (array) fields with 'Web Design' in the array
      // the following works, need to find out if there is another way

      foreach($data->projects as $project) {
        $fields = $project->fields;
        if (in_array("Web Design", $fields)) {
          $filteredData[] = $project;
        }
      }

// return $filteredData;

      $user = Auth::user();
      return view('pages/results', compact('user', 'filteredData', 'searchForThis'));
    }
}
