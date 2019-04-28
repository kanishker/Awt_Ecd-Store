<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

$user = Auth::user();
?>
<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <a class="navbar-brand" href="{{'/movie'}}">Lets Start Shopping </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Search...">
            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/viewcart'}}">
                        <i class="fas fa-shopping-cart"></i> Cart &nbsp;
                    <span class="badge badge-light">
                        {{Illuminate\Support\Facades\Session::has('cart') ? Illuminate\Support\Facades\Session::get('cart')->totalQty:''}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fas fa-user-circle"></i> User</a>
                </li>-->

                <div class="dropdown show">
                    @if(Auth::check())
                    <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>  {{$user->name}}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="{{'/logout'}}">Logout</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                             <form method="post" action="{{'/logout'}}">
                            @csrf
                            <a class="dropdown-item" href="#"></a><input type="submit"></form>
                    </div>

                            @else
                            <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>  User
                            </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{'/login'}}">Login</a>
                        <a class="dropdown-item" href="{{'/register'}}">Register</a>
                        @endif


                    </div>
                </div>

            </ul>
        </div>
    </div>
</nav>
