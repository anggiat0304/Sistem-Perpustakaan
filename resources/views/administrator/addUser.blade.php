@extends('layout/main')
@section('title','Tambah User')
@section('container')
    <div class="container">
    <div class="row">
        <div  class="col-md-5 w3-card form">
        <h2>Tambah User </h2>
            <form method="POST" action="/login/administrator/addUserProccess">
            @csrf
                <div class="form-group">
                <label for="barcode">TAG ID </label>
                <input type="text" class="form-control" placeholder="Masukkan tag id" name="tag_id">
                </div>
                <div class="form-group">
                <label for="judul">NAMA</label>
                <input type="text" class="form-control" placeholder="Masukkan nama" name="nama">
                </div>  
                <div class="form-group">
                <label for="judul">NIP / NIM</label>
                <input type="text" class="form-control" placeholder="Masukkan NIP atau NIM" name="NIM">
                </div>  
                <div class="form-group">
                <label for="judul">STATUS</label>
                <input type="text" class="form-control" placeholder="Masukkan status" name="status">
                </div>  
                <div class="form-group">
                <label for="judul">EMAIL</label>
                <input type="text" class="form-control" placeholder="Masukkan email" name="email">
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