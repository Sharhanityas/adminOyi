@extends('layouts.default')

@section('content')
    
<div class="card">
        <div class="card-header">
            <strong>Edit Formulir</strong>
        </div>
    <div class="card-body card-block">
        <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="form-body">
                @foreach($item as $data)
                <div class="card">
                    <div class="card-body">   
                        <div class="form-group">
                            <label for="atribut" class="form-control-label">Atribut</label>
                            <input type="text" name="atribut[]" value="{{$data->atribut}}"
                                class="form-control @error('atribut')is-invalid @enderror" disabled/>
                            @error('atribut')<div class="text-muted">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#staticBackdrop{{$data->id}}">Edit</button>                     
                            <a class="btn btn-danger" href="{{ route('destroy', $data->id) }}" role="button">Hapus</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </form>
    </div>
    
    
</div>

<!-- Modal edit -->
@foreach($item as $data)
<form action="{{ route('registration.update',$data->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
        @csrf
    <div class="modal fade" id="staticBackdrop{{$data->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="atribut" class="form-control-label">Atribut</label>
                    <input type="text" name="atribut" value="{{$data->atribut}}"
                        class="form-control" />
                </div>
                <div class="form-group">
                        <label for="type" class="form-control-label">Type</label>
                        <select name="type" id="type"  class="form-control">
                            <option value="text" <?php if($data->type=="text") echo 'selected="selected"'; ?>>Text</option>
                            <option value="file" <?php if($data->type=="file") echo 'selected="selected"'; ?>>File</option>
                            <option value="checkbox" <?php if($data->type=="checkbox") echo 'selected="selected"'; ?>>Checkbox</option>
                            <option value="radiobutton" <?php if($data->type=="radiobutton") echo 'selected="selected"'; ?>>Radiobutton</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</form>
@endforeach

@endsection
