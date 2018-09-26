<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\PostAlinea;
use DB;

class Post extends Model
{
	protected $table = "Post";

    public function category() {
        return $this->belongsTo(category::class);
    }

	/**
     * Get the comments for the blog post.
     */
    public function comments() {
        return $this->hasMany(Comment::class);
    }


    /*
    * Returns all the alineas which belongs to a post.
    */
    public function alineas() {
        return $this->hasMany(PostAlinea::class);
    }

    /*
    * Returns all highlighted posts
    */
    public function highLightedPosts() {
    	return DB::table($this->table)->where('highlighted', '=', 1)->orderBy('orderNr')->get();
    }	
}