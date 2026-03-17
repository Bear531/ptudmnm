<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    function laythongtinsach2(){
        $sach = DB::table("sach as s")
            ->join("dm_the_loai as t","s.the_loai","=","t.id")
            ->select("s.id","s.tieu_de", "s.nha_xuat_ban","s.tac_gia","s.gia_ban","s.link_anh_bia")
            ->where("t.ten_the_loai","Tác phẩm kinh điển")
            ->get();
        return view("tacphamkinhdien",compact("sach"));
    }

    function laythongtintheloai(){
        $the_loai_sach = Category::all();
        return view("theloai",compact("the_loai_sach"));
    }
    function laythongtinsach(){
        $sach = Book::where("nha_xuat_ban","Văn Học")->get();
        return view("sach",compact("sach"));
    }
    function QB_themdulieu(){
        $data = ["id"=>4,"ten_the_loai"=>"Trinh thám"];
        DB::table("dm_the_loai")->insert($data);
    }

    }


