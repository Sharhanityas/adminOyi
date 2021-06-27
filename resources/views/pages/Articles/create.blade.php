@extends('layouts.default')

@section('content')
<div class="card"> 
<div class="card-header">
    <strong>Tambah Artikel</strong>
</div>
<div class="card-body card-block">
    <form action="{{route('article.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul_artikel" class="form-control-label">Judul Artikel</label>
            <input type="text"
                   name="judul_artikel"
                   value="{{ old('judul_artikel') }}"
                   class="form-control @error('judul_artikel')is-invalid @enderror"
                   />
                   @error('judul_artikel')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="isi" class="form-control-label">Isi</label>
            <textarea name="isi"
                      class="form-control @error('isi')is-invalid @enderror" id="ckeditor">{{ old('isi') }}</textarea>
                      @error('isi')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Tambah Artikel
            </button>
        </div>
    </form>
</div>
</div>
@endsection