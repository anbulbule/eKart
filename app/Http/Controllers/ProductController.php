<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('product',['product'=> $product]);
    }
    public function detail($id){
        $product = Product::find($id);
        return view('detail',['product'=>$product]);
    }
    public function search(Request $req){
        $search = Product::where('name', 'like' , '%'.$req->search.'%' )
                        ->get();
        return view('search',['search'=> $search]);
    }
    public function addToCart(Request $req){
        if($req->session()->has('user')){
        $cart = Cart::create([
            'user_id'=>$req->session()->get('user')['id'],
            'product_id'=>$req->product_id
        ]);
        return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    public function logout(Request $req){
        if($req->session()->has('user')){
            $req->session()->flush();
            return redirect('/');
        }
        return redirect('/');
    }
    static function cartCount(){
        
        // if(session('user')){
        //     $user_id = Session::get('user')['id'];
        //     return Cart::where('user_id',$user_id)->count();
        // }
        // return ' 0 ';

        $user_id = Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }

    public function cartList(){
        $user_id = session('user')['id'];
        $product = Cart::join('products','cart.product_id','products.id')
                    ->where('cart.user_id',$user_id)
                    ->select('products.*','cart.id as cart_id')->get();

                    return view('/cartlist',['product'=>$product]);
    }

    public function removeCart($id){
        Cart::find($id)->delete();
        return redirect('/cartlist');
    }
}