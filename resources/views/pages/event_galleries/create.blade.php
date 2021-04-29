@extends('layouts.default')

@section('content')
<div class="card"> 
<div class="card-header">
    <strong>Tambah Foto Event</strong>
</div>
<div class="card-body card-block">
    <form action="{{route('event_galleries.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul_event" class="form-control-label">Judul Event</label>
            <select name="event_id"
            class="form-control  @error('event_id')is-invalid @enderror">
        @foreach ($events as $event)
            <option value="{{ $event->id }}">{{ $event->judul_event }}</option>            
        @endforeach
        </select>
                   @error('event_id')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="gambar_event" class="form-control-label">Foto</label>
            <input type="file"
                   name="gambar_event"
                   value="{{ old('gambar_event') }}"
                   accept="image/*"
                   class="form-control @error('gambar_event')is-invalid @enderror"
                   />
                   @error('gambar_event')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Tambah Foto Event
            </button>
        </div>
    </form>
</div>
</div>
@endsection