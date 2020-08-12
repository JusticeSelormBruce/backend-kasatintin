<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Result extends Model
{
   
    protected $guarded = [];
    public function poll()
    {
       return $this->belongsTo(Poll::class);
    
    }
}
