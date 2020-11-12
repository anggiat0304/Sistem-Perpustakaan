<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $book = book::all();
        return view('administrator\listBook',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administrator\addBook');
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
        $book = new book;
        $book->judul_buku = $request->judul;
        $book->tag_id =$request->barcode;
        $book->user_id = null;
        $book->status_id = null;
        $book->tanggal_penminjaman = null;
        $book->tanggal_pengembalian = null;
        $book->jatuh_tempo = null;
        $book->save();
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
        $book = book::all()->find($id);
        return view('administrator\detailBook',compact('book'));
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
        $book = book::all()->find($id);
        return view('administrator\editBook',compact('book'));
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
        book::where('id',$id)->update([
            'tag_id' => $request->barcode,
            'judul_buku'=>$request->judul,
            'user_id'=> null,
            'status_id'=> null,
            'tanggal_penminjaman'=> null,
            'tanggal_pengembalian'=>null,
            'jatuh_tempo'=>null
        ]);
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
        $book = buku::find($id);
        $book->delete();
        return redirect()->back();
    }
}
