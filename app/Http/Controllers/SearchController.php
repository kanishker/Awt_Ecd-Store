<?php

namespace App\Http\Controllers;
use App\Model\Movie;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class SearchController extends Controller
{
    function index()
    {
        return view('movie.search');
    }
    function action($id)
    {
        return 'hello';
    }
    function search(Request $request)
    {
        $movs = Movie::where('name','like','%'.$request.'%')
            ->orWhere('dir','like','%'.$request.'%')
            ->get();
       // dd($movs);
        Return view('shop.searchres',['movie'=>$movs]);
    }
}
