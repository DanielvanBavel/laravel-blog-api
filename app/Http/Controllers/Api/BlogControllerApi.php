<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Post;

class BlogControllerApi extends Controller
{
    public function getAllPosts() {
        return Post::with(['category', 'alineas', 'comments'])->orderBy('created_at', 'desc')->get();
    }

    public function getPost($id) {
    	return Post::with(['category', 'alineas', 'comments'])->where('id', '=', $id)->get();
    }

    public function getCategories() {
        return Category::all();
    }

    public function getCategorie($id) {
        return Category::with(['posts'])->where('id', '=', $id)->get();
    }

    public function getHighlightedPosts() {
    	return Post::find(1)->highLightedPosts();
    }


}
