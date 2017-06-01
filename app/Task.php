<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // ***** Defining a method inside a class *****
    // public static function incomplete()
    // {
    //    return static::where('completed',0)->get();
    // }

    // ***** Scope method *****
    public function scopeIncomplete($query)
    {
      return $query->where('completed', 0);
    }
}
