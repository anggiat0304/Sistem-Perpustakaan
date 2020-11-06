@extends('layout/main')
@section('title','Tambah Buku Perpustakaan')
@section('container')
    <div class="container">
     <div class="row">
        <div  class="col-md-4 w3-card form">
        <h2>Tambah Buku Perpustakaan</h2>
            <form method="POST" action="/login/administrator/addBookProccess">
            @csrf
                <div class="form-group">
                <label for="barcode">TAG ID </label>
                <input type="text" class="form-control" placeholder="Masukkan tag id" name="barcode">
                </div>
                <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" class="form-control" placeholder="Masukkan judul" name="judul">
                </div>  
                <div class="form-group">
                <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>

        <div class="col-md-6" style="padding:20px;">
            <div class="row" style="margin-bottom:20px;">
            <a href="/login/administrator/pengembalian" class="w3-card col-md-6 text-center icon">
                <img src="/images/return.png" width="100">
                <h1 class="te">Pengembalian</h1>            
            </a>
            <a href="/login/administrator/daftarbuku" class="w3-card col-md-6 text-center icon">
                <img src="/images/book.png" width="100">
                <h1 class="te">Daftar Buku</h1>            
            </a>
            </div>
            <div class="row">
            <a href="/login/administrator/user" class="w3-card col-md-6 text-center icon">
                <img src="/images/participant.png" width="100">
                <h1 class="te">Pengguna</h1>            
            </a>
            <a href="/login/administrator/peminjaman" class="w3-card col-md-6 text-center icon">
                <img src="/images/list.png" width="100">
                <h1 class="te">Daftar Peminjaman </h1>            
            </a>
            </div>
       </div>   
     </div>
    </div>
@endsection