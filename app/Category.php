<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable =[ 'title','color'];
  
   public function posts()
   {
      return $this->hasMany(Post::class,'categories_id','id');
   }
}
