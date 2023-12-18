<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DangnhapController extends Controller
{
    public function dangnhap(){
        return view('nguoidung.dangnhap');
    }
    public function dangky(){
        return view('nguoidung.dangky');
    }
    public function luuthongtin(Request $request){
        $data = array();
        $data['fullname'] = $request->fullname;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['numberphone'] = $request->numberphone;

        DB::table('tbl_nguoidung')->insert($data);
        
        return view('nguoidung.dangky');
    }
    public function nguoidungdangnhap(Request $request){
        $email = $request->email;;
        $password = $request->password;
        $result = DB::table('tbl_nguoidung')->where('email',$email)->where('password',$password)->first();
        if ($result) {
            Session::put('fullname',$result->fullname);
            Session::put('id',$result->id);
            $product = DB::table('tbl_product')->get();
            return view('nguoidungdangnhap')->with('product',$product);
        }
    }
}
