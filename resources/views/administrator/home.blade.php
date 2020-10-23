@extends('layout/main')
@section('title','homeadministrator')
@section('container')
    <div class='container text-center'>
        <div class='row' style="margin-top: 20px;">
            <div class="col-md-6">
             <a href="administrator/daftarbuku"><button class="btn btn-primary w3-hover-white" style="padding:50px; width:100%">
                    DAFTAR BUKU
                </button></a>
            </div>
            <div class="col-md-6">
             <a href="administrator/daftarbuku"><button class="btn w3-purple w3-hover-white" style="padding:50px; width:100%">
                    TAMBAH PESERTA PERPUSTAKAAN
                </button></a>
            </div>
        </div>
        <div class='row' style="margin-top: 20px;">
        <div class="col-md-12">
             <a href="administrator/listpeminjaman"><button class="btn w3-khaki w3-hover-white" style="padding:50px; width:100%">
                    DAFTAR PEMINJAMAN BUKU
                </button></a>
            </div>
        </div>
    </div>
@endsection