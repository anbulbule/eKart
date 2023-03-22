<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\order;
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
        if(session('user')){
            $user_id = session('user')['id'];
            $product = Cart::join('products','cart.product_id','products.id')
                        ->where('cart.user_id',$user_id)
                        ->select('products.*','cart.id as cart_id')->get();
    
                        return view('/cartlist',['product'=>$product]);
        }else{
            return redirect('/login');
        }
    }

    public function removeCart($id){
        Cart::find($id)->delete();
        return redirect('/cartlist');
    }

    public function orderNow(){
        if(session('user')){
        $user_id = Session::get('user')['id'];
        $totalPrice = Cart::join('products','cart.product_id','products.id')
                    ->where('user_id',$user_id)
                    ->sum('products.price');
            return view('ordernow',['total'=> $totalPrice]);
        }
        return redirect('/login');
        }

    public function orderPlace(Request $req){
        if(session('user')){
            $user_id = Session::get('user')['id'];
            $allCart = Cart::where('user_id',$user_id)->get();
            foreach($allCart as $cart){
                $order = order::create([
                    'product_id' => $cart->product_id,
                    'user_id' => $cart->user_id,
                    'status' => 'pending',
                    'payment_method' => $req->payment,
                    'payment_status' => 'pending',
                    'address' => $req->address
                ]);
                Cart::where('user_id',$user_id)->delete();
            }
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    public function myOrders(){
        if(session('user')){
        $user_id = Session::get('user')['id'];
        $orders = order::join('products','orders.product_id','products.id')
        ->where('orders.user_id',$user_id)->get();
        return view('myorders',['orders'=> $orders]);
        }else{
            return redirect('/login');
        }
    }
    
}