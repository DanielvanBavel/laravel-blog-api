<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostAlinea extends Model
{
    protected $table = "PostAlinea";

    public function post() {
    	return $this->BelongsTo(Post::class);
    }
}
