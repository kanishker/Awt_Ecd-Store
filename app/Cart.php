<?php

namespace App;


class Cart
{
    public $movie = null;
    public $totalQty = 0;
    public $totalPrice = 0;


    Public function _construct($oldCart)
    {
        if($oldCart) {
            $this->movie = $oldCart->movie;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    Public function add($movie,$id)
    {
        $storedMovie = ['qty'=>0,'price'=>$movie->price,'movie'=>$movie];
        if($this->movie){
            if(array_key_exists($id,$this->movie)){
                $storedMovie= $this->movie[$id];
            }
        }
        $storedMovie['qty']++;
        $storedMovie['price']= $movie->price * $storedMovie['qty'];
        $this->movie[$id] = $storedMovie;
        $this->totalQty++;
        $this->totalPrice += $movie->price;

    }
}
