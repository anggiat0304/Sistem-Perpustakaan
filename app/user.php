<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    // 
    protected $table = 'user';
    
    public function buku()
    {
        return $this->hasMany(book::class);
    }
}
