@extends('layout/main')
@section('title','homeadministrator')
@section('container')
    <div class='container'>
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
    <?php $no=0;?>
    @foreach($user as $u)
    @endforeach
    </tbody>
    </table>
    </div>
    @endsection