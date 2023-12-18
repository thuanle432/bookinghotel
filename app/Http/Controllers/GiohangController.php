<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use Gloudemans\Shoppingcart\Facades\Cart;


class GiohangController extends Controller
{
   
    public function luugiohang(Request $request){
        $productid = $request->productid_hidden;
        $quantity = $request->qty;
        
        $product_room = DB::table('tbl_product')->where('id', $productid)->first();

        // Cart::add('293ad', 'Product 1', 1, 9.99);
        $data['id'] = $product_room->id;
        $data['qty'] = $quantity;
        $data['name'] = $product_room->product_name;
        $data['price'] = $product_room->product_price;
        $data['weight'] = "123";
        $data['options']['image'] = $product_room->product_image;
        Cart::add($data);
        return view('giohang.giohang');
    }
    public function giohang(){
        return view('giohang.giohang');
    }
    public function xoagiohang($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/giohang');
    }
    public function updateqty(Request $request){
        $rowId = $request->rowid;
        $qty = $request->quantity;
        Cart::update($rowId, $qty);
        return Redirect::to('/giohang');
    }
    //mã giảm giá
    // public function ktmagiamgia(Request $request){
    //     $data = $request->all();
    //     print_r($data);
    // }
 
}
