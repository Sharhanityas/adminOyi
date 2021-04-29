@extends('layouts.default')

@section('content')
<div class="card"> 
<div class="card-header">
    <strong>Ubah Artikel</strong>
    <small>{{ $item->judul_event }}</small>
</div>
<div class="card-body card-block">
    <form action="{{route('article.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="judul_artikel" class="form-control-label">Judul Artikel</label>
            <input type="text"
                   name="judul_artikel"
                   value="{{ old('judul_artikel') ? old('judul_artikel') : $item->judul_artikel }}"
                   class="form-control @error('judul_artikel')is-invalid @enderror"
                   />
                   @error('judul_artikel')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="isi" class="form-control-label">Isi</label>
            <textarea name="isi"
                      class=" ckeditor form-control @error('isi')is-invalid @enderror">{{ old('isi') ? old('isi') : $item-> isi }}</textarea>
                      @error('isi')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Ubah Artikel
            </button>
        </div>
    </form>
</div>
</div>
@endsection