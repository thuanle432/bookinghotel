<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PhongController extends Controller
{
    public function themphong(){
        return view('admin.themphong');
    }
    public function lietkephong(){
        $product = DB::table('tbl_product')->get();

        return view('admin.lietkephong')->with('product', $product);
    }
    public function luuphong(Request $request){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_infor'] = $request->product_infor;
        $data['product_price'] = $request->product_price;
        $data['product_image'] = $request->product_image;
        DB::table('tbl_product')->insert($data);
        return view('admin.themphong');

    }
    public function suaphong($id){
        $edit_product = DB::table('tbl_product')->where('id', $id)->get();
        $manager_product = view('admin.suaphong')->with('edit_product', $edit_product);
        return view('admin.suaphong')->with('edit_product', $edit_product);
    }
    public function chinhsua(Request $request, $id){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_infor'] = $request->product_infor;
        $data['product_price'] = $request->product_price;
        $data['product_image'] = $request->product_image;
        DB::table('tbl_product')->where('id', $id)->update($data);
         return view('admin.themphong');
    }
    public function xoaphong($id){
        DB::table('tbl_product')->where('id', $id)->delete();
        return Redirect::to('lietkephong');
    }
}
