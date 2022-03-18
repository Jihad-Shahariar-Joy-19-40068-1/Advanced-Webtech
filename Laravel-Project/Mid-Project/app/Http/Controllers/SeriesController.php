<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Models\Series;
use App\Models\Episode;

class SeriesController extends Controller
{
    public function __construct(){
        $this->middleware('auth.user');
    }
    //
    public function create(){
        return view('');
    }
    public function edit(){
        //Id from request
        //retrive object from elquent
        //pass the object to view
        //show db value in form
        return view('');      
    }
    public function editSubmit(){
        //do validations
        //retrive object from db using id
        //reinitiate db properties/columns with req values
        //object->save(); (no new series>series::where id = id from parameter)
    }

    public function delete(){
        //object->delete();
        //return view('series.delete');  
    }
    public function get(Request $req){
        
        //select * from series_info where id = $req->id
        $series = Series::where('id','=',decrypt($req->id))
        //middle parameter default '=' if not given
        ->select('id','name','type','genre','description','ep_count','poster','trailer')
        ->first();  //get() for multiple data.
        
        return view('series.get')
        ->with('series',$series); 
    }
    public function list(){
        
        $series = Series::all();
        return view('series.list')
        ->with('series',$series);
    }

    public function get_ep(Request $req){
        
        //select * from episode_info where id = $req->id
        $episode = Episode::where('id','=',decrypt($req->id))
        ->select('id','ep_no','name','summary','video','from_series')
        //->orderBy('name', 'desc')
        ->first();  //get() for multiple data.
        
        //return $episode;
        return view('episode.get')
        ->with('episode',$episode); 
    }

    function search(Request $req)
    {
        $data= Series::
        where('name','like', '%'. $req->input('query').'%')
        ->get();
        return view('series.search')
        ->with('data',$data); 
    }
}
