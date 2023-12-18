<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Coupon;

class MaController extends Controller
{
    public function themma(){
        return view('admin.themma');
    }
   
    public function luuma(Request $request){
        $data = array();
        $data['code_name'] = $request->code_name;
        $data['code'] = $request->code;
        $data['code_tinhnang'] = $request->code_tinhnang;
        DB::table('tbl_magiamgia')->insert($data);
        return Redirect::to('themma');
    }
    public function lietkema(){
        $code = DB::table('tbl_magiamgia')->get();

        return view('admin.lietkema')->with('code', $code);
    }
}
