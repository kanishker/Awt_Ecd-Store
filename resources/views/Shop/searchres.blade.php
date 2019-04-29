<?php
/**
 * Created by PhpStorm.
 * User: kanishker
 * Date: 2019-04-28
 * Time: PM 10.07
 */

?>
@extends('ShopLayout.layout')


@section('movies')
    @include('ShopLayout.homecaro')

@if (isset($movie))
    @foreach ($movie as $movies)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="/movie/{{$movies->id}}"><img class="card-img-top" width="700" height="200" src="https://d1t80wr11ktjcz.cloudfront.net/wp-content/uploads/2018/07/01061016/7315945.jpg?d=900x474&q=70" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="/movie/{{$movies->id}}">{{$movies->name}}</a>
                    </h4>
                    <h5>{{$movies->price}}.Rs</h5>
                    <p class="card-text">{{$movies->desc}}</p>
                </div>
                <a href="{{Route('movie.add-to-cart',['id'=>$movies->id])}}" class="btn btn-success">Buy Movie</a>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>
    @endforeach
@else
    <h1>Sorry There are no movies please select some other</h1>
   @endif
@endsection
