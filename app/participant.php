<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    //
    public function book()
    {
        return $this->belongToMany('App\book');
    }
}
