@extends('layouts.default')

@section('content')
<div class="card"> 
<div class="card-header">
    <strong>Tambah Foto Review</strong>
</div>
<div class="card-body card-block">
    <form action="{{route('review_galleries.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="detail" class="form-control-label">Nama</label>
            <select name="review_id"
            class="form-control  @error('review_id')is-invalid @enderror">
        @foreach ($reviews as $review)
            <option value="{{ $review->id }}">{{ $review->detail }}</option>            
        @endforeach
        </select>
                   @error('review_id')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <label for="foto" class="form-control-label">Foto</label>
            <input type="file"
                   name="foto"
                   value="{{ old('foto') }}"
                   accept="image/*"
                   class="form-control @error('foto')is-invalid @enderror"
                   />
                   @error('foto')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Tambah Foto Review
            </button>
        </div>
    </form>
</div>
</div>
@endsection