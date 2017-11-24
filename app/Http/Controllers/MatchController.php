<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Show the match . 
     *
     * @return string
     */
    public function index(){
    	// $news = DB::table('ab_news')->paginate(5);
        // return view('home.index', ['news' => $news]);
           return view('match.index');
    }
}
