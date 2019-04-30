<?php
/**
 * Created by PhpStorm.
 * User: kanishker
 * Date: 2019-05-01
 * Time: AM 1.44
 */?>
@include('AdminLayout.header')
@if(Session::has('success'))
    <script>

        alert("{{Session::get('success')}}");

    </script>
    <!--<div class ="col-sm-6.col-md-4.col-md-offset-4.col-sm-offset-3">
        <div id="charge-message" class="alert alert-success">

    </div>
    </div>-->
@endif
@if(Session::has('error'))
    <script>

        alert("{{Session::get('error')}}");

    </script>
    <!--<div class ="col-sm-6.col-md-4.col-md-offset-4.col-sm-offset-3">
        <div id="charge-message" class="alert alert-success">

    </div>
    </div>-->
@endif
<a href="{{'/admin'}}" class="btn-dark"> <- Return To Home </a>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>
                       Order Id
                    </th>
                    <th>
                        User name
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
Address                    </th>
                    <th>
                        payment_id
                    </th>
                    <th>
                        cart
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $movie)
                    <tr>
                        <td>
                            {{$movie->id}}
                        </td>
                        <td>
                            {{$movie->user_id}}
                        </td>
                        <td>
                            {{$movie->name}}
                        </td>
                        <td>
                            {{$movie->address}}
                        </td>
                        <td>
                            {{$movie->payment_id}}
                        </td>
                        <td>
                            {{$movie->cart}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
