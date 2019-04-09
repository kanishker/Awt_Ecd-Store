<?
use Illuminate\Support\Facades\Session;

?>

          @if(Session::has('cart'))
              @foreach($movies->movie as $movie)
                  <li>

                      <button class="btn-primary btn xs dropdown-toggle" data-toggle="dropdown">
                          Action<span class="caret"></span>
                      </button>
                      <ul>
                          {{($movie->movie->name)}}
                          {{($movie->movie->price)}}
                          <li><a href="">reduce by 1</a> </li>
                          <li><a href="">Delete all</a> </li>
                          <li></li>
                      </ul>
                      </div>
                  </li>

              <strong>Total:{{($movie->movie->price)}} </strong>
              @endforeach
              <hr>
              <a href="{{route('checkout')}}" type="button" class="btn-success">Check  Out</a>
              </ul>

          @else
                <strong>No Items</strong>
        @endif


