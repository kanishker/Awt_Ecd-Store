@extends('AdminLayout.layout')


@section('content')
    @include('AdminLayout.homecaro')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form  method="post" id="addmovie-form" action="{{'/admin/addmovie'}}">

                    <div class="form-group">

                        <label for="exampleInputEmail1">
                            Movie Name
                        </label>
                        <input type="text" class="form-control" id="name" name="name" />
                    </div><div class="form-group">

                        <label for="exampleInputEmail1">
                            genere
                        </label>
                        <input type="text" class="form-control" id="gen" name="gen" />
                    </div><div class="form-group">

                        <label for="exampleInputEmail1">
                            Description
                        </label>
                        <textarea type="text" class="form-control" id="desc" name="desc"></textarea>
                    </div>

                    <div class="form-group">

                        <label for="exampleInputEmail1">
                            Price
                        </label>
                        <input type="text" class="form-control" id="price" name="price" />
                    </div><div class="form-group">

                        <label for="exampleInputEmail1">
Language                        </label>
                        <input type="text" class="form-control" id="lang" name="lang" />
                    </div><div class="form-group">

                        <label for="exampleInputEmail1">
                            Director
                        </label>
                        <input type="text" class="form-control" id="dir" name="dir" />
                    </div><div class="form-group">

                        <label for="exampleInputEmail1">
                            Cast
                        </label>
                        <input type="text" class="form-control" id="cast" name="cast" />
                    </div>
                    <div>
                        <label for="exampleInputFile">
                            Image 1
                        </label>
                        <input type="file" class="form-control-file" id="img1" name="img1" /><label for="exampleInputFile">
                            Image 2
                        </label>
                        <input type="file" class="form-control-file" id="img2" name="img2" />
                        <label for="exampleInputFile">
                            Image 3
                        </label>
                        <input type="file" class="form-control-file" id="img3" name="img3" />
                        <p class="help-block">
                            Insert The first Image
                        </p>
                    </div>
                    <div class="checkbox">

                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary">
                        Add Movie
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection

