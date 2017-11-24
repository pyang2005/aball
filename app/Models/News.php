<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'ab_news';
	protected $fillable = ['id','title','author','image', 'content', 'url', 'status','visit'];
}
