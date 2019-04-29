@include('ShopLayout.header')


          @if(Session::has('cart'))
              @foreach($movies->movie as $movie)
                  <br>
                  <br>
                  <br>
                  <div class="row">
                      <div class="col-md-7">
                          <a href="#">
                              <img class="img-fluid rounded mb-3 mb-md-0" src="{{($movie->movie->img1)}}" alt="">
                          </a>
                      </div>
                      <div class="col-md-5">
                          <h3>{{($movie->movie->name)}}</h3>
                          <h3>Rs .{{($movie->movie->price)}}</h3>
                          <p>{{($movie->movie->desc)}}</p>
                          <a class="btn btn-success" href="{{route('checkout')}}">Checkout</a>
                      </div>
                  </div>

              <strong>Total:{{($movie->movie->price)}} </strong>
              @endforeach
              <hr>
              <a href="{{route('checkout')}}" type="button" class="btn-success">Check Out</a>
              </ul>
              <a href="{{'/resetcart'}}" type="button" class="btn-danger">Clear<i class="fas fa-trash-alt"></i></a>
          @else
              <div class="col-md-7">
              <h1><strong>No Items</strong></h1>
                <a href="{{'/movie'}}">Back to Movies</a>
              </div>
        @endif


