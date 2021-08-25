@extends('client/layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
@endsection
@section('content')

<div class="container" style="margin-top: 100px;">
    <div class="card" >
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <img src="{{ url('/images/homeClient/24-approved-checked-outline.svg') }}" style="width: 20%; high : 20%">
                
            </div>
            <div class="d-flex justify-content-center">
                <h1>Pendaftaran Berhasil</h1>
            </div>
            <div class="d-flex justify-content-center">
                <h5>Pendaftaran anda berhasil, Periksa email untuk langkah selanjutnya</h5>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a class="btn button" href="/EventList" role="button">Lihat Event Lainnya</a>
            </div>
        </div>  
    </div>
</div>

@endsection