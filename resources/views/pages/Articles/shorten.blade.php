@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">

                <strong>Ubah Short Link</strong>
                <a href="{{ route('article.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="card-body card-block">
            @if (Session::has('message'))
                <p class="alert alert-info text-center">{{ Session::get('message') }}</p>
            @endif
            @if (Session::has('danger'))
                <p class="alert alert-danger text-center">{{ Session::get('danger') }}</p>
            @endif
            <form action="{{ route('article_shorten.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="judul_artikel" class="form-control-label">Judul Artikel</label>
                    <input type="text" name="judul_artikel" value="{{ $item->judul_artikel }}" class="form-control" readonly />
                </div>

                <div class="form-group">
                    <label for="shorten_id" class="form-control-label">ID</label>
                    <input type="text" name="shorten_id" value="{{ old('shorten_id') ? old('shorten_id') : $item->shorten_id }}" class="form-control @error('shorten_id')is-invalid @enderror" readonly />
                    @error('shorten_id')<div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="shorten_custom" class="form-control-label">Custom Short Link</label>
                    <input type="text" name="shorten_custom" value="{{ old('shorten_custom') ? old('shorten_custom') : $item->shorten_custom }}" class="form-control @error('shorten_custom')is-invalid @enderror" />
                    @error('shorten_custom')<div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
