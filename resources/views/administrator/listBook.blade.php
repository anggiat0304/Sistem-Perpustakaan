@extends('layout/main')
@section('title','Daftar Buku Perpustakaan')
@section('container')
<div class="container">
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
<a href="addBook"><img src="/images/plus.png" class="item " width="100"></a>

<table class="w3-table w3-striped w3-bordered w3-hoverable tab" >
<thead style="background:">
<tr>
    <td>No</td>
    <td>TAG ID</td>
    <td>Judul Buku</td>
    <td>Aksi</td>
</tr>
</thead>
<tbody>
<?php $no=1;?>
    @foreach($book as $bk)
    <tr>
    <td><?php echo $no++; ?></td>
    <td>{{$bk->tag_id}}</td>
    <td>{{$bk->judul_buku}}</td>
    <td>
        <a href="detailBook/{{$bk->id}}"><button class="btn btn-warning">Detail</button></a>
        <a href="deleteBook/{{$bk->id}}"><button class="btn btn-danger">Hapus</button></a>
    </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection