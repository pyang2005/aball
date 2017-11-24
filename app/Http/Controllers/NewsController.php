<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    
    /**
     * Get latest news 
     *
     * @return string
     */
    public function index(){

		$news = News::where('status', '=', 0)
					->orderBy('created_at', 'desc')
					->paginate(10);

        $news->each(function($new){
            $image = json_decode(str_replace("'",'"',$new->image));
            if(empty($image)){
                $new->image = '';
            }
            else{
                $new->image = current($image);
            }
        });
        return json_encode($news,JSON_UNESCAPED_UNICODE);
    	// $news = DB::table('ab_news')->paginate(5);
        return view('news.index', ['news' => $news]);
    }

     /**
     * Show the detail news  
     *
     * @return string
     */
    public function show($id){

		DB::table('ab_news')->where('id', $id)->increment('visit');
        
		$news = News::where('id', '=', $id)->first();
        \Log::debug(request()->url(). ':'.$news->visit);
  
		// $news = DB::table('ab_news')->where('id', $id)->first();
        return view('news.show', ['news' => $news]);
    }
}
