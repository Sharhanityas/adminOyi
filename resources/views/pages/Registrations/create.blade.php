@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Formulir</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul_event" class="form-control-label">Judul Event</label>
                    <select name="event_id" class="form-control  @error('event_id')is-invalid @enderror">
                        @foreach ($events as $registration)
                            <option value="{{ $registration->id }}">{{ $registration->judul_event }}</option>
                        @endforeach
                    </select>
                    @error('event_id')<div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="atribut" class="form-control-label">Atribut</label>
                    <input type="text" name="atribut" value="{{ old('atribut') }}"
                        class="form-control @error('atribut')is-invalid @enderror" />
                    @error('atribut')<div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Tambah Formulir
            </button>
        </div>
        </form>
    </div>
    </div>
@endsection
