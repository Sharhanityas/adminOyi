@extends('layouts.default')

@section('content')
<div class="card"> 
<div class="card-header">
    <strong>Tambah Review</strong>
</div>
<div class="card-body card-block">
    <form action="{{route('review.store')}}" method="POST">
        @csrf
      
        <div class="form-group">
            <label for="kata" class="form-control-label">Kata</label>
            <textarea name="kata"
                      class=" ckeditor form-control @error('kata')is-invalid @enderror">{{ old('kata') }}</textarea>
                      @error('kata')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>

         <div class="form-group">
            <label for="detail" class="form-control-label">Detail</label>
            <textarea name="detail"
                      class=" ckeditor form-control @error('detail')is-invalid @enderror">{{ old('detail') }}</textarea>
                      @error('detail')<div class="text-muted">{{ $message }}</div>                      
                   @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Tambah Review
            </button>
        </div>
    </form>
</div>
</div>
@endsection