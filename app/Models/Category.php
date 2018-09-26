<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Post;
use App\Models\Comment;

class Category extends Model
{
	protected $table = "Category";

	/*
	* Return all posts which belongs to a category
	*/
    public function posts() {
    	return $this->hasMany(Post::class);
    }
}
