<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* Mass assignement is allowed for these fields */
    // protected $fillable = ['title', 'body'];
    /* Mass assignement is not allowed for these fields */
    // protected $guarded = ['user_id']

    public function getComments()
    {
      return $this->hasMany(Comment::class);
    }

    public function user()
    {
      //dd($this->user_id);
      return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {

      Comment::create([
        'body' => $body,
        'post_id' => $this->id,
        'user_id' => auth()->id()
      ]);
      
      /* Another way */
      // $this->getComments()->create(compact('body'));
    }

}
