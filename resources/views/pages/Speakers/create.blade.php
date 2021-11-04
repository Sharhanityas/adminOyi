@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Pembicara</strong>
        </div>

        <div class="card-body card-block">
            <form action="{{ route('speaker.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul_event" class="form-control-label">Judul Event</label>
                    <select name="event_id" class="form-control  @error('event_id')is-invalid @enderror">
                        @foreach ($events as $speaker)
                            <option value="{{ $speaker->id }}">{{ $speaker->judul_event }}</option>
                        @endforeach
                    </select>
                    @error('event_id')<div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>

                <div id="form-speaker">
                    <div class="form-group">
                        <label for="nama" class="form-control-label">nama pembicara</label>
                        <input type="text" name="nama[]" value="{{ old('nama') }}"
                            class="form-control @error('nama')is-invalid @enderror" />
                        @error('nama')<div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-control-label">email pembicara</label>
                        <input type="text" name="email[]" value="{{ old('email') }}"
                            class="form-control @error('email')is-invalid @enderror" />
                        @error('email')<div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="telepon" class="form-control-label">telepon pembicara</label>
                        <input type="text" name="telepon[]" value="{{ old('telepon') }}"
                            class="form-control @error('telepon')is-invalid @enderror" />
                        @error('telepon')<div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="foto" class="form-control-label">Foto</label>
                        <input type="file" name="foto[]" value="{{ old('foto') }}" accept="image/*"
                            class="form-control @error('foto')is-invalid @enderror" />
                        @error('foto')<div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi" class="form-control-label">Deskripsi</label>
                        <textarea name="deskripsi[]"
                            class=" ckeditor form-control @error('deskripsi')is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')<div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="button" onclick="add_speaker()">
                            Add
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Pembicara
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
