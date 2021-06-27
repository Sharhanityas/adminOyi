@extends('layouts.default')

@section('content')
<div class="card"> 
<div class="card-header">
    <strong>Ubah Event</strong>
    <small>{{ $item->judul_event }}</small>
</div>
<div class="card-body card-block">
    <form action="{{route('event.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="judul_event" class="form-control-label">Judul Event</label>
            <input type="text"
                   name="judul_event"
                   value="{{ old('judul_event') ? old('judul_event') : $item->judul_event }}"
                   class="form-control @error('judul_event')is-invalid @enderror"
                   />
                   @error('judul_event')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="tanggal_event" class="form-control-label">Tanggal</label>
            <input type="text"
                   name="tanggal_event"
                   value="{{ old('tanggal_event') ? old('tanggal_event') : $item->tanggal_event }}"
                   class="form-control @error('tanggal_event')is-invalid @enderror"
                   />
                   @error('tanggal_event')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
                <div class="form-group">
            <label for="waktu" class="form-control-label">Waktu</label>
            <input type="text"
                   name="waktu"
                   value="{{ old('waktu') ? old('waktu') : $item->waktu }}"
                   class="form-control @error('tanggal_event')is-invalid @enderror"
                   />
                   @error('waktu')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="tempat" class="form-control-label">Tempat</label>
            <input type="text"
                name="tempat"
                value="{{ old('tempat') ? old('tempat') : $item->tempat }}"
                class="form-control @error('tanggal_event')is-invalid @enderror"
                />
                @error('tempat')<div class="text-muted">{{ $message }}</div>                      
                @enderror
        </div>
        <div class="form-group">
            <label for="link" class="form-control-label">link</label>
            <input type="text"
                name="link"
                value="{{ old('link') ? old('link') : $item->link }}"
                class="form-control @error('tanggal_event')is-invalid @enderror"
                />
                @error('link')<div class="text-muted">{{ $message }}</div>                      
                @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi" class="form-control-label">Deskripsi</label>
            <textarea name="deskripsi"
                      class=" ckeditor form-control @error('deskripsi')is-invalid @enderror">{{ old('deskripsi') ? old('deskripsi') : $item-> deskripsi }}</textarea>
                      @error('deskripsi')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Ubah Events
            </button>
        </div>
    </form>
</div>
</div>
@endsection