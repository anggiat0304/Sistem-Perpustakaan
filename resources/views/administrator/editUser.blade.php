@extends('layout.main')
@section('title','edit data User')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="w3-card">
                <h1>Ubah data user</h1>
                <form method="POST" class="form" action="/login/administrator/updateUserProccess/{{$user->id}}">
                 @csrf
                <div class="form-group">
                <label for="barcode">TAG ID</label>
                <input type="text" class="form-control" value="{{$user->tag_id}}" name="tag_id">
                </div>
                <div class="form-group">
                <label for="judul">Nama</label>
                <input type="text" class="form-control" value="{{$user->nama}}" name="nama">
                </div>
                <div class="form-group">
                <label for="judul">NIP / NIM</label>
                <input type="text" class="form-control" value="{{$user->no_id}}" name="no_id">
                </div>
                <div class="form-group">
                <label for="judul">Status</label>
                <input type="text" class="form-control" value="{{$user->posisi}}" name="status">
                </div>
                <label for="judul">Email</label>
                <input type="text" class="form-control" value="{{$user->email}}" name="email">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
             </div>
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