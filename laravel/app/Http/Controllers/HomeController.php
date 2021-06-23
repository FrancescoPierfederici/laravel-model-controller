<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyMovie;

class HomeController extends Controller
{
    //
   public function index(){
    $movies = MyMovie::all();

     //dump($movies);

    $datiView = [
        'movieList' => $movies,
    ];

    return view('home', $datiView);
   }

}
