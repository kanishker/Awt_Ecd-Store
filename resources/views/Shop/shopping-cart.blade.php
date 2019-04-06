<?
use Illuminate\Support\Facades\Session;
?>

          @if(Session::has('cart'))
              @foreach($movies as $movie)
                  <li>

                      <button class="btn-primary btn xs dropdown-toggle" data-toggle="dropdown">
                          Action<span class="caret"></span>
                      </button>
                      <ul>
                          <li><a href="">reduce by 1</a> </li>
                          <li><a href="">Delete all</a> </li>
                          <li></li>
                      </ul>
                      </div>
                  </li>
              @endforeach
              <strong>Total: </strong>

              </ul>

          @else
                <strong>No Items</strong>
        @endif


