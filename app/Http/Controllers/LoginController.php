<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function cek($keyword)
    {
        return $keyword;
    }
    public function login($keyword)
    {
        if (strpos($keyword,"123456")) {
            return view('administrator/home');
        }else {
            echo $keyword;
        }
    }
}
