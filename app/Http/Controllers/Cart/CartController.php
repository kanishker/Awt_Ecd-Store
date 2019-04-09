<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Movie;
use App\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    Public function AddToCart(Request $request, $id)
    {
        $movie = Movie::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($movie,$movie->id);

        $request->session()->put('cart',$cart);
       //dd($request->session()->get('cart'));
        return redirect('/movie');
    }

    public function getCart(Request $request)
    {
        if(!Session::has('cart')){
            Return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
       // dd($request->session()->get('cart'));
        $cart12 = json_decode(json_encode(($request->session()->get('cart'))));
        //$cart12=$cart12->toArray();
    //   dd($cart12->movie->{"1"});
        Return view('shop.shopping-cart',['movies'=>$cart12,'total'=>$cart12->totalPrice]);
    }
    public function getCheckout(Request $request)
    {
        if(!Session::has('cart')){
            Return view('shop.shopping-cart');
        }
        $cart12 = json_decode(json_encode(($request->session()->get('cart'))));
        //$total = $cart12->movie->price;
        return view('shop.checkout',['total'=>100]);


    }
}
