<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ViDuLayoutController extends Controller
{
    function sach($id = null)
    {
        if (isset($id)) {
            $data_sach = DB::select("select * from sach where the_loai = ? order by gia_ban asc limit 0,8", [$id]);
        } else {
            $data_sach = DB::select("select * from sach order by gia_ban asc limit 0,8");
        }
        return view('index', compact('data_sach', 'id'));
    }
}
