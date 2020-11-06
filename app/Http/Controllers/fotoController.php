<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fotoController extends Controller
{
    //
    public function show()
    {
        $home = Storage::url('home.png');
        return view('administrator/detailUser',compact('home'));
    }
}
