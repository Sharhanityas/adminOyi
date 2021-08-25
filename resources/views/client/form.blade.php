@extends('client/layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
@endsection
@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="d-flex justify-content-center">
        <?php $index = 0; ?>
        @foreach($form as $data)
            <?php $index++; ?>
            @if($index == 1)
                <h1 class="quote-blue"><strong>{{$data->event['judul_event']}}</strong></h1>
            @endif
        @endforeach
    </div>
    <div class="mb-5 d-flex justify-content-center">
        <div class="card" style="width: 90%;">
            <div class="card-body">
                <?php $index = 0; ?>
                @foreach($form as $data)
                    <?php $index++; ?>
                    @if($index == 1)
                        <form action="/SubmitRegistration/{{$data->event_id}}" method="POST" enctype="multipart/form-data">
                    @endif
                @endforeach
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control daftar" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control daftar" id="email" required>
                    </div>
                    <?php $index = 0; ?>
                    @foreach($form as $data)
                    
                    @if($data->type == 'text')
                        <div class="mb-3">
                            <label for="{{$data->atribut}}" class="form-label">{{$data->atribut}}</label>
                            <input type="text" name="{{$data->slug}}" class="form-control daftar" id="{{$data->atribut}}" required>
                        </div>
                    @elseif($data->type == 'checkbox')
                        <?php $index++; ?>
                        @if($index == 1)
                            Pilih :
                        @endif
                        <div class="mb-3">
                            <div class="form-check">
                                <!-- <input class="form-check-input" type="checkbox" value="{{$data->atribut}}" name="{{$data->slug}}"/>
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$data->atribut}}
                                </label> -->
                                <label class="control control-checkbox">
                                    {{$data->atribut}}
                                    <input type="checkbox" value="{{$data->atribut}}" name="{{$data->slug}}" required/>
                                    <div class="control_indicator"></div>
                                </label>
                            </div>
                        </div>
                    @elseif($data->type == 'file')
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload</label>
                            <input name="{{$data->slug}}" class="form-control" type="file" id="formFile">
                        </div>
                    @endif                   
                    
                    @endforeach

                    <div class="d-grid gap-2">
                    <button type="submit" class="button btn">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection