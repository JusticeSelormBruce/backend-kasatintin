<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =[ 'content','author_id','post_id'];

    public function post()
    {
       return $this->belongsTo(Post::class);
    }
    public function author()
    {
       return $this->belongsTo(User::class,'author_id','id');
    }
}
