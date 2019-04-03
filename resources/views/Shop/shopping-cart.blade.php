
@extends('ShopLayout.layout')

@section('movies').

.
.

.

.
.

.
.
.
.
    <div class="container">

        <div class="row">

#.#.#.#...
            .

            .
            .
            .

            .
            .
            .
            ..

            <!-- /.col-lg-3 -->

          @if(Session::has('cart'))
                <ul class="list-group">
                    @//foreach($movies as $movie)
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
                    @//endforeach
                        <strong>Total: {{$totalPrice}}</strong>

                </ul>
            @else
                <strong>No Items</strong>
        @endif

                <!-- /.card -->

                <!-- <div class="card card-outline-secondary my-4">
                     <div class="card-header">
                         Product Reviews
                     </div>
                     <div class="card-body">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                         <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                         <hr>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                         <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                         <hr>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                         <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                         <hr>
                         <a href="#" class="btn btn-success">Leave a Review</a>
                     </div>
                 </div>-->
                <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

        </div>

    </div>
@endsection

