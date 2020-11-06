@extends('layout.main')
@section('title','Detail User')
@section('container')
    <div class="container">
    <div class="row">
      <div class="w3-card col-md-4">
        <div class="form">
        <h1>Detail User</h1>
                <div class="form-group">
                <label for="barcode">TAG ID</label>
                <input type="text" class="form-control" value="{{$user->tag_id}}" readonly>
                </div>
                <div class="form-group">
                <label for="judul">Nama</label>
                <input type="text" class="form-control" value="{{$user->nama}}" readonly>
                </div>
                <div class="form-group">
                <label for="judul">NIM / NIM</label>
                <input type="text" class="form-control" value="{{$user->no_id}}" readonly>
                </div>
                <div class="form-group">
                <label for="judul">Status</label>
                <input type="text" class="form-control" value="{{$user->posisi}}" readonly>
                </div>
                <div class="form-group">
                <label for="judul">Email</label>
                <input type="text" class="form-control" value="{{$user->email}}" readonly>
                </div>
                <div class="form-group">
                   <a href="editUser/{{$user->id}}"><button type="submit" class="btn btn-success">Edit</button></a>
                   <a href="cetakKartu/{{$user->id}}"><button type="submit" class="btn btn-dark">Cetak Kartu</button></a>
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
