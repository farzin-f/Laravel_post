<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    /* No child extending the Model would have any field to be guarded*/
    protected $guarded = [];
}
