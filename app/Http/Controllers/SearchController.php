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

        $movs = Movie::where('name','like','%'.$request->q.'%')
            ->orWhere('dir','like','%'.$request->q.'%')
            ->get();
       //echo $movieName = $request->q;
       // dd($movs);
        Return view('shop.searchres',['movie'=>$movs]);
    }
    function searchbygen($gen)
    {

        $movs = Movie::where('genere',$gen)
            ->get();
        //echo $movieName = $request->q;
        // dd($movs);
        Return view('shop.searchres',['movie'=>$movs]);
      // echo "Search gen".$gen;
    }
    public function search2(Request $request)
    {
            if($request->ajax())
            {
                $query = $request->get('query');
                if($query != '')
                {
                    $data = Movie::where('name','like','%'.$query.'%')
                        ->orWhere('dir','like','%'.$query.'%')
                        ->get();
                }
                else
                {
                    $data = Movie::all();
                }
                $total_row = $data->count();
                if($total_row>0)
                {
                    foreach ($data as $row)
                    {
                        $output ='<tr> 
                                    <td>'.$row->name.'</td> 
                                    <td>'.$row->desc.'</td> 
                                    <td>'.$row->dir.'</td> 
                                    <td>'.$row->id.'</td> 
                                     
                                  </tr>';
                    }
                }
                else{
                    $output = 'No Data';
                }
                $data = array(
                    'table_data' =>$output
                );
                echo json_encode($data);
            }
    }
}
