<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    } 
   
    public function admindangnhap(Request $request){
        
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if ($result) {
            Session::put('admin_fullname',$result->admin_fullname);
            return view('admindangnhap');
        }
    }
    public function trangchuadmin(){
        return view('trangchuadmin');
    } 
    public function lietkekhachhang(){
        $user = DB::table('tbl_nguoidung')->get();

        return view('admin.lietkekhachhang')->with('user', $user);
    }
    public function xoakhachhang($id){
        DB::table('tbl_nguoidung')->where('id', $id)->delete();
        return Redirect::to('lietkekhachhang');
    }
}
