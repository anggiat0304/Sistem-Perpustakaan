<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $table = "buku";
    public function pengguna()
    {
        return $this->belongsToMany('App\user');
    }
}
