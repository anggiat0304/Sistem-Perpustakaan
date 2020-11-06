<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    //
    protected $table = "user";
    public function buku()
    {
        return $this->belongsToMany('App\pengguna');
    }
    public function peminjaman()
    {
        return hasMany('App\peminjaman');
    }
}
