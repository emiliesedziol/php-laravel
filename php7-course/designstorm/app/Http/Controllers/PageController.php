<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Project;


// public function __construct()
//    {
//        $this->middleware('auth');
//    }

class PageController extends Controller
{
    public function index() {
      $project = Project::where('user_id', Auth::id())->select('title')->get();
      return $project;
      $user = Auth::user();
      return view('pages/home', compact('user', project));
    }

    public function results(request $request) {

      $keyword = $request->keyword;

      return redirect("search/".$keyword);
    }

    public function search(request $request, $keyword) {
      $client = new Client();

      $res = $client->request('GET', "https://api.behance.net/v2/projects?q=".urlencode($keyword) ."&client_id=".env("BEHANCE_KEY")."&field=".urlencode("web design"));

      $data = $res->getBody();
      $data = json_decode($data);
      $filteredData =$data->projects;


      $insperationsArray = Project::where('user_id', Auth::id())->where('active', 1)->first();

      $insperationsArray = $insperationsArray->insperations;

      $imageInfoArray = [];
      foreach($insperationsArray as $image) {
        array_push($imageInfoArray, $image->image_info);
      }
      $user = Auth::user();
      return view('pages/results', compact('user', 'filteredData', 'keyword', 'imageInfoArray'));
    }
}
