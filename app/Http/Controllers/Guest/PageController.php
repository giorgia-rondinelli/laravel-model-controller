<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function films(){

        $movies = Movie::orderBy('title')->get();



        return view('films', compact('movies'));
    }

    public function bestfilms(){
        $movies= Movie::where('vote','>',8)->get();

        return view('films', compact('movies'));

    }
    // ricevo l'id del libro per poi stamparlo
    public function movieDetail($id){

        $movie= Movie::find($id);

        return view('detail', compact('movie'));


    }
}
