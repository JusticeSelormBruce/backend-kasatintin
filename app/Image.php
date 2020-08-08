<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable = [
        'description', 'url', 'post_id', 'featured'
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
