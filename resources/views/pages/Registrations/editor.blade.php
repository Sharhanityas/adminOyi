@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Formulir</strong>
            <small>{{ $item->judul_event }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('registration.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="atribut" class="form-control-label">Atribut</label>
                    <input type="text" name="atribut" value="{{ old('atribut') ? old('atribut') : $item->atribut }}"
                        class="form-control @error('atribut')is-invalid @enderror" />
                    @error('atribut')<div class="text-muted">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Ubah Formulir
                        </button>
                    </div>
            </form>
        </div>
    </div>
@endsection
