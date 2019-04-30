<?php

namespace App\Http\Controllers\Movie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Movie;
use Illuminate\Pagination\Paginator;
use App\Http\Resources\Movie as MovieResource;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $movie = Movie::simplePaginate(15);
        $movie = Movie::all();

        return view('Shop.index',['movies'=>$movie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //echo $request;
        $movie = new Movie;
        $movie->name = $request->name;
        $movie->genere = $request->gen;
        $movie->desc = $request->desc;
        $movie->price = $request->price;
        $movie->language = $request->lang;
        $movie->dir = $request->dir;
        $movie->cast = $request->cast;
        $movie->img1 = $request->img1;
        $movie->img2 = $request->img2;
        $movie->img3 = $request->img3;
        $movie->save();

        return redirect('/admin/viewmovies');

        /*$table->String('name');
        $table->String('genere');
        $table->text('desc');
        $table->integer('price');
        $table->String('language');
        $table->String('dir');
        $table->String('cast');
        $table->String('img1');
        $table->String('img2');
        $table->String('img3');
        $table->timestamps();*/


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        //return view('Shop.ViewMovie',['movies'=>Movie::findOrFail($mid)]);
       // return new MovieResource($movie);
        return view('Shop.ViewMovie',['movie'=>$movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $movie = Movie::find($request->id);

        $movie->name = 'New Flight Name';
        $movie->name = $request->name;
        $movie->genere = $request->gen;
        $movie->desc = $request->desc;
        $movie->price = $request->price;
        $movie->language = $request->lang;
        $movie->dir = $request->dir;
        $movie->cast = $request->cast;
        $res=$movie->save();
        if($res==1) {
            return redirect('/admin/viewmovieedit')->with('success','Successfully Updated');
        }
        else
        {
            return redirect('/admin/viewmovieedit')->with('error','Updates UnSuccessful');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        $res = $movie->delete();
        if($res==1) {
            return redirect('/admin/viewmovieedit')->with('success','Successfully Deleted');
        }
        else
        {
            return redirect('/admin/viewmovieedit')->with('error','Deletes UnSuccessful');
        }

    }
    public function _construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function moviesadmin()
    {
        $movie = Movie::all();

        return view('Admin.viewmovieedit',['movies'=>$movie]);
    }
    public function getForupdate($id)
    {
        $movie = Movie::findOrFail($id);

        //return view('Shop.ViewMovie',['movies'=>Movie::findOrFail($mid)]);
        // return new MovieResource($movie);
        return view('Admin.movieup',['movies'=>$movie]);
    }
}
