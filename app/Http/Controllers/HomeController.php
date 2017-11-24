<?php

namespace App\Http\Controllers;

use App\Models\ABUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Get User Home Center 
     *
     * @return string
     */
    public function index(){
    	
        $res = ABUser::find(3)->first();

        dump($res);
        dump($res->team()->first()->name);
die();
        return view('home.index');
    }
}
