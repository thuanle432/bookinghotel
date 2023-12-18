<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TrangchuController extends Controller
{
    public function trangchu(){
        $product = DB::table('tbl_product')->get();
        return view('trangchu')->with('product',$product);
    }
    public function trangchunguoidung(){
        $product = DB::table('tbl_product')->get();
        return view('nguoidung.trangchunguoidung')->with('product',$product);
    }

    public function xemthongtinphong($id){
        $product = DB::table('tbl_product')->where('id',$id)->get();
        return view('nguoidung.xemthongtinphong')->with('product',$product);
    }
}
