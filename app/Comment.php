<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

/* It extends our own Model class */
class Comment extends Model
{


    public function post()
    {
      return $this->belongsTo(Post::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
