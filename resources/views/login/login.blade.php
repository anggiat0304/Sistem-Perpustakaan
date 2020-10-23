@extends('layout/main')
@section('title','login')
@section('container')
        <div class="container col-md-4 text-center" style="margin-top: 100px;">
        <fieldset class="login">
            <form id="login" method="post">
                <div class="form-group">
                <label for="nim">SILAHKAN LOGIN</label>
                <input type="text" class="form-control" placeholder="Enter barcode" id="search">
                </div>
            </form>
        </fieldset>
        </div>
@endsection
