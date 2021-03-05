@extends('layouts.default')

@section('content')
<div class="card"> 
<div class="card-header">
    <strong>Tambah Foto Artikel</strong>
</div>
<div class="card-body card-block">
    <form action="{{route('article_galleries.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul_artikel" class="form-control-label">Judul Artikel</label>
            <select name="articles_id"
            class="form-control  @error('articles_id')is-invalid @enderror">
        @foreach ($articles as $article)
            <option value="{{ $article->id }}">{{ $article->judul_artikel }}</option>            
        @endforeach
        </select>
                   @error('articles_id')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="foto_article" class="form-control-label">Foto</label>
            <input type="file"
                   name="foto_article"
                   value="{{ old('foto_article') }}"
                   accept="image/*"
                   class="form-control @error('foto_article')is-invalid @enderror"
                   />
                   @error('foto_article')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Tambah Foto Artikel
            </button>
        </div>
    </form>
</div>
</div>
@endsection