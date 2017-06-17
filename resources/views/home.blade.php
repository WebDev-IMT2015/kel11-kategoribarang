@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hai Admin Web Development</div>

                <div class="panel-body">
                    Anda sudah masuk, apakah anda ingin melihat barang-barang?
                    <br>
                    <a href="{{ url('/barangs') }}">Iya, saya ingin masuk </a> atau 
                    <a href="{{ url('/') }}">kembali ke halaman utama</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
