@extends('layout/main')
@section('title','homeadministrator')
@section('container')
    <div class='container'>
        <h1>Daftar Peminjaman Buku</h1>
        <div class="row">
            <div class="col-md-12">
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
            <div class="col-md-12">
                        
                    <table class="w3-table w3-striped w3-bordered w3-hoverable tab" >
                        <thead>
                    <tr>
                    <td>No</td>
                    <td>TAG Buku</td>
                    <td>Judul Buku</td>
                    <td>Peminjam Buku</td>
                    <td>Waktu Peminjaman</td>
                    <td>Batas Pengembalian</td>
                    <td>Waktu Pengembalian</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1;?>
                
                    @foreach($user as $user)
                        @foreach($user->buku as $book) 
                    <?php
                        if ($book->status_id == 1) { ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td>{{$book->tag_id}}</td>
                            <td>{{$book->judul_buku}}</td>
                            <td>{{$user->nama}}</td>
                            <td>{{$book->tanggal_penminjaman}}</td>
                            <td>{{$book->tanggal_pengembalian}}</td>
                            <td>{{$book->jatuh_tempo}}</td> 
                            </tr>
                        <?php }?>
                        @endforeach
                    @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
    @endsection