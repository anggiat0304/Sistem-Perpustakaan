<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    public function participant()
    {
        return $this->belongToMany('App\participant');
    }
}
