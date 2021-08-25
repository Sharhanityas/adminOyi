@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-tittle">
                            Formulir Event
                        </h4>
                    </div>
                </div class="card-body--">
                <div class="row mt-5 mx-auto" style="margin-bottom: 100px;">
                    

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach ($items as $item)
                        <div class="col">
                            <div class="card h-100" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{$item->judul_event}}</strong></h5>
                                <div class="d-grid gap-2 d-md-block">
                                    <a class="btn btn-primary" href="{{ route('registration.edit', $item->event_id) }}" role="button">Edit</a>
                                    <a class="btn btn-info" href="responses" role="button">Response</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection
