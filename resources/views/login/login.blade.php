@extends('layout/main')
@section('title','login')
@section('container')
        <div class="container col-md-4 text-center" style="margin-top: 100px;">
        <fieldset class="login">
            <form id="login" method="post">
                @csrf
                <div class="form-group">
                <label for="nim"><b>LOGIN</b></label>
                <input type="text" name="tag" onkeyup='inp()' class="form-control" placeholder="Enter barcode" id="input">
                   <div id="demo"></div> 
                </div>
            </form>
        </fieldset>
        </div>
        
@endsection
