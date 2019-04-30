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
                       Movie Id
                    </th>
                    <th>
                        Movie name
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Movie Director
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>
                        {{$movie->id}}
                    </td>
                    <td>
                        {{$movie->name}}
                    </td>
                    <td>
                        {{$movie->desc}}
                    </td>
                    <td>
                        {{$movie->dir}}
                    </td>
                    <td>
                        <a href="{{'/admin/update/'.$movie->id}}" class="btn btn-primary">Update</a>

                       <a href="{{'/admin/Delete/'.$movie->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
