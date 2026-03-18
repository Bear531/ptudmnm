<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
class btn extends Controller
{
    function ten(){
        return view("ten");
    }

    function runtime(){
        $movie = DB::table('movie')->select('movie_name','release_date','runtime')->where('runtime','>',120)->limit(10)->get();
        return view('runtime_movie',compact('movie'));
    }

}


