<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    function index(){
        $data=Product::all();        
       return view('products',['products'=>$data]);
    }

    function product_details($id){
        $data=Product::find($id);     
        return view('product_details',['data'=>$data]);   
    }

    function add_to_cart(Request $req){  
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            redirect('/login');
        }
    }

    static function cartItems(){
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }

    
}
