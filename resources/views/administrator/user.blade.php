@extends('layout\main')
@section('title','Daftar User')
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
    <a href="addUser" class="item"><img src="/images/plus.png" width="100"></a>

<table class="w3-table w3-striped w3-bordered w3-hoverable tab" >
<thead style="background:">
<tr>
    <td>No</td>
    <td>TAG ID</td>
    <td>NAMA</td>
    <td>NIM/NIP</td>
    <td>POSISI</td>
    <td>EMAIL</td>
    <td>AKSI</td>
</tr>
</thead>
<tbody>
<?php $no=1;?>
    @foreach($user as $user)
    <tr>
    <td><?php $no++; ?></td>
    <td>{{$user->tag_id}}</td>
    <td>{{$user->nama}}</td>
    <td>{{$user->no_id}}</td>
    <td>{{$user->posisi}}</td>
    <td>{{$user->email}}</td>
    <td>
        <a href="detailUser/{{$user->id}}"><button class="btn btn-warning">Detail</button></a>
        <a href="deleteUser/{{$user->id}}"><button class="btn btn-danger">Hapus</button></a>
    </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>

    </div>
@endsection