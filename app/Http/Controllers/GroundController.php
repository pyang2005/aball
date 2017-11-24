<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroundController extends Controller
{
    /**
     * Show the play gound . 
     *
     * @return string
     */
    public function index(){
    	// $news = DB::table('ab_news')->paginate(5);
        // return view('home.index', ['news' => $news]);
           return view('ground.index');
    }
}
