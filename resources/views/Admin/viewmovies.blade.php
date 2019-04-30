<?php
/**
 * Created by PhpStorm.
 * User: kanishker
 * Date: 2019-04-30
 * Time: PM 10.34
 */
?>
@include('AdminLayout.header')
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Movies</title>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="#">E CD Store</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <form class="form-inline" action="">
                            <input class="form-control mr-sm-2" type="text" name="q" id="q"/>
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                Search
                            </button>
                        </form>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            Movie Name
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Director
                        </th>
                        <th>
                            Update
                        </th>
                        <th>
                            Delete
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        fetch_movie_data();

        function fetch_movie_data(query='')
        {
            $.ajax(
                {
                    url:"{{route('live_search.action')}}",
                    method:'GET',
                    data:{query:query},
                    dataType:'json',
                    success:function(data)
                    {
                        $('tbody').html(data.table_data);
                        //$('#total_records').text(data.total_data);
                    }

                }
            )
        }
        $(document).on('keyup', '#q', function(){
            var query = $(this).val();
            fetch_movie_data(query);

        });
    });
</script>
    </body>
</html>
