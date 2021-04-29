@extends('layouts.default')

@section('content')
<div class="card"> 
<div class="card-header">
    <strong>Tambah Event</strong>
</div>
<div class="card-body card-block">
    <form action="{{route('event.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul_event" class="form-control-label">Judul Event</label>
            <input type="text"
                   name="judul_event"
                   value="{{ old('judul_event') }}"
                   class="form-control @error('judul_event')is-invalid @enderror"
                   />
                   @error('judul_event')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="tanggal_event" class="form-control-label">Tanggal</label>
            <input type="date"
                   name="tanggal_event"
                   value="{{ old('tanggal_event') }}"
                   class="form-control @error('tanggal_event')is-invalid @enderror"
                   />
                   @error('tanggal_event')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="waktu" class="form-control-label">Waktu</label>
            <input type="time"
                   name="waktu"
                   value="{{ old('waktu') }}"
                   class="form-control @error('waktu')is-invalid @enderror"
                   />
                   @error('waktu')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="tempat" class="form-control-label">Tempat</label>
            <input type="text"
                   name="tempat"
                   value="{{ old('tempat') }}"
                   class="form-control @error('tempat')is-invalid @enderror"
                   />
                   @error('tempat')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi" class="form-control-label">Deskripsi</label>
            <textarea name="deskripsi"
                      class=" ckeditor form-control @error('deskripsi')is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                      @error('deskripsi')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Tambah Events
            </button>
        </div>
    </form>
</div>
</div>
@endsection