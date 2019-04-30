@extends('AdminLayout.layout')


@section('content')
    @include('AdminLayout.homecaro')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form  method="PUT" id="addmovie-form" action="{{'/admin/updates/'}}">

                    <div class="form-group">

                        <label for="exampleInputEmail1">
                            Movie Id
                        </label>
                        <input type="text" class="form-control" id="id" name="id" value="{{$movies->id}}"/>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">
                            Movie Name
                        </label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$movies->name}}"/>
                    </div>

                    <div class="form-group">

                        <label for="exampleInputEmail1">
                            genere
                        </label>
                        <input type="text" class="form-control" id="gen" name="gen" value="{{$movies->genere}}"/>
                    </div><div class="form-group">

                        <label for="exampleInputEmail1">
                            Description
                        </label>
                        <textarea type="text" class="form-control" id="desc" name="desc">{{$movies->desc}}</textarea>
                    </div>

                    <div class="form-group">

                        <label for="exampleInputEmail1">
                            Price
                        </label>
                        <input type="text" class="form-control" id="price" name="price" value="{{$movies->price}}"/>
                    </div><div class="form-group">

                        <label for="exampleInputEmail1">
                            Language                        </label>
                        <input type="text" class="form-control" id="lang" name="lang" value="{{$movies->language}}" />
                    </div><div class="form-group">

                        <label for="exampleInputEmail1">
                            Director
                        </label>
                        <input type="text" class="form-control" id="dir" name="dir" value="{{$movies->dir}}" />
                    </div><div class="form-group">

                        <label for="exampleInputEmail1">
                            Cast
                        </label>
                        <input type="text" class="form-control" id="cast" name="cast" value="{{$movies->cast}}"/>
                    </div>
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn btn-primary">
                        Update Changes
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection

