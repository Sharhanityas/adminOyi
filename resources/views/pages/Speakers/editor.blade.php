@extends('layouts.default')

@section('content')
<div class="card"> 
<div class="card-header">
    <strong>Ubah Event</strong>
    <small>{{ $item->judul_event }}</small>
</div>
<div class="card-body card-block">
    <form action="{{route('speaker.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nama" class="form-control-label">Nama Pembicara</label>
            <input type="text"
                   name="nama"
                   value="{{ old('nama') ? old('nama') : $item->nama }}"
                   class="form-control @error('nama')is-invalid @enderror"
                   />
                   @error('nama')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
                   <div class="form-group">
            <label for="email" class="form-control-label">Email Pembicara</label>
            <input type="text"
                   name="email"
                   value="{{ old('email') ? old('email') : $item->email }}"
                   class="form-control @error('email')is-invalid @enderror"
                   />
                   @error('email')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
                   <div class="form-group">
            <label for="telepon" class="form-control-label">Telepon Pembicara</label>
            <input type="text"
                   name="telepon"
                   value="{{ old('telepon') ? old('telepon') : $item->telepon }}"
                   class="form-control @error('telepon')is-invalid @enderror"
                   />
                   @error('telepon')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        <div class="form-group">
            <label for="deskripsi" class="form-control-label">Deskripsi</label>
            <textarea name="deskripsi"
                      class=" ckeditor form-control @error('deskripsi')is-invalid @enderror">{{ old('deskripsi') ? old('deskripsi') : $item-> deskripsi }}</textarea>
                      @error('deskripsi')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Ubah Pembicara
            </button>
        </div>
    </form>
</div>
</div>
@endsection