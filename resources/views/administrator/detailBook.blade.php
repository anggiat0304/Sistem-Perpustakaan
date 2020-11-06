@extends('layout.main')
@section('title','Detail Buku')
@section('container')
    <div class="container">
        <div class="row">
        <div class="w3-card col-md-4">
        <div class="form">
        <h1>Detail Buku</h1>
                <div class="form-group">
                <label for="barcode">TAG ID</label>
                <input type="text" class="form-control" value="{{$book->tag_id}}" readonly>
                </div>
                <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" class="form-control" value="{{$book->judul_buku}}" readonly>
                </div>
                <div class="form-group">
                   <a href="editBook/{{$book->id}}"><button type="submit" class="btn btn-success">Edit</button></a>
                   <a href="bookBorrower/{{$book->id}}"><button type="submit" class="btn btn-dark">Riwayat Peminjaman Buku</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-1">
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
