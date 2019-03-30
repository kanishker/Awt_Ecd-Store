<?php

namespace App\Http\Controllers;

use App\Model\Movie;
use Illuminate\Http\Request;
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
        $movie = Movie::paginate(15);

        return movieresource::collection($movie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = isset($request->name) ? $request->name : null;
        $genere = isset($request->genere) ? $request->genere : null;
        $desc = isset($request->desc) ? $request->desc : null;
        $price = isset($request->price) ? $request->price : null;
        $language = isset($request->language) ? $request->language : null;
        $dir = isset($request->dir) ? $request->dir : null;
        $cast = isset($request->cast) ? $request->cast : null;
        $img1 = isset($request->img1) ? $request->img1 : null;
        $img2 = isset($request->img2) ? $request->img2 : null;
        $img3 = isset($request->img3) ? $request->img3 : null;
        $created_at = isset($request->created_at) ? $request->created_at : null;
        $updated_at = isset($request->updated_at) ? $request->updated_at : null;
        if ($name != "" && $genere != "" && $price != "")
        {
            $movie = new Movie();
            $movie->name = $name;
            $movie->genere = $genere;
            $movie->desc = $desc;
            $movie->price = $price;
            $movie->language = $language;
            $movie->dir = $dir;
            $movie->cast = $cast;
            $movie->img1 = $img1;
            $movie->img2 = $img2;
            $movie->img3 = $img3;
            $movie->created_at = $created_at;
            $movie->updated_at = $updated_at;
                $res = $movie->save();
                if ($res == 1)
                {
                    return response()->json(['STATUS' => 'SUCCESS', 'RESULT' => new MovieResource($movie)], 222);
                }
                else{
                    return response()->json(['STATUS' => 'Failed', 'RESULT' => new MovieResource($movie)], 500);
                }
        }
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

        return new MovieResource($movie);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);

        if($movie->delete())
        {
            return new MovieResource($movie);
        }
    }
}
