<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $table = 'buku';
    
    public function user()
    {
        return $this->belongsTo('App\user');
    }
    
}
