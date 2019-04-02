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
       // dd($request->session()->get('cart'));
        return redirect('/movie');
    }
}
