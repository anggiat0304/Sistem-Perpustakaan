<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengguna;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = pengguna::all();
        return view('administrator/user',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administrator/addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->status!="admin") {
            $user = new pengguna;
        $user->tag_id = $request->tag_id;
        $user->nama = $request->nama;
        $user->no_id = $request->NIM;
        $user->posisi = $request->status;
        $user->email = $request->email;
        $user->role_id = 2;
        $user->save();
        }
        elseif ($request->status == "admin")
        {
            #
            $user = new pengguna;
        $user->tag_id = $request->tag_id;
        $user->nama = $request->nama;
        $user->no_id = $request->NIM;
        $user->posisi = $request->status;
        $user->email = $request->email;
        $user->role_id = 1; 
        $user->save();
        }
       
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = pengguna::all()->find($id);
        return view('administrator.detailUser',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = pengguna::all()->find($id);
        return view('administrator\editUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    if (!strpos($request->status,'user')) {
        pengguna::where('id',$id)->update([
            'tag_id' => $request->tag_id,
            'nama'=>$request->nama,
            'no_id'=> $request->no_id,
            'posisi'=>$request->status,
            'email'=>$request->email,
             'role_id'=>2   
                ]);
            }
    elseif(strpos($request->status,'user')) {
        pengguna::where('id',$id)->update([
            'tag_id' => $request->tag_id,
            'nama'=>$request->nama,
            'no_id'=> $request->no_id,
            'posisi'=>$request->status,
            'email'=>$request->email,
             'role_id'=>1   
                ]);
            }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user= pengguna::find($id);
        $user->delete();
        return redirect()->back();
    }
}
