@extends('client/layout')
<!-- title section -->
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
@endsection
@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="d-flex justify-content-center">
        <h1 class="quote-blue"><strong>Judul Event</strong></h1>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control daftar" id="nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control daftar" id="email">
                </div>
                @foreach($form as $data)
                <div class="mb-3">
                    <label for="{{$data->atribut}}" class="form-label">{{$data->atribut}}</label>
                    <input type="text" name="{{$data->atribut}}" class="form-control daftar" id="{{$data->atribut}}">
                </div>
                @endforeach
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload</label>
                    <input name="" class="form-control" type="file" id="formFile">
                </div>
                <div class="d-grid gap-2">
                <button type="submit" class="button btn">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection