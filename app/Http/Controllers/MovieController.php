<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function laythongtinphim(){
    $movies = DB::table("movies")
        ->select("movie_name", "release_date", "vote_average")
        ->orderBy("vote_average", "desc")
        ->limit(10)
        ->get();

    return view("topmovies", compact("movies"));
}
}