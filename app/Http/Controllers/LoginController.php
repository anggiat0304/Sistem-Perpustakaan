<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    //
   
    public function login($keyword)
    {
              
        $data = user::where('tag_id',$keyword)->first();   
        if($data){               
            if($data->role_id == 1){
        
            
                return view('/administrator/home','data');
            }
            elseif ($data->role_id ==2) {
               
                return redirect('/user/home','data');    
            }
    
            
        }
        else{
         
            return redirect()->back()->with('alert','Password atau Email, Salah!');
        }
    }
}
