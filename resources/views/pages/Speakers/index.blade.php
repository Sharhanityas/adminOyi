@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-tittle">
                            Daftar Pembicara
                        </h4>
                    </div>
                </div class="card-body--">
                <table id="myTable" class="display">
                    <thead>
                        <tr class="text-uppercase">
                            <th>no</th>
                            <th>event</th>
                            <th>nama</th>
                            <th>email</th>
                            <th>telepon</th>
                            <th>foto</th>
                            <th>deskripsi</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    {{ $item->judul_event }}
                                    {{-- <span data-toggle="tooltip" data-placement="top" title="{{ $item->judul_event }}">
                                        {{ substr(strip_tags($item->judul_event), 0, 25) }}
                                        {{ strlen(strip_tags($item->judul_event)) > 25 ? '...' : '' }} </span> --}}
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>
                                    <img src="{{ url($item->foto) }}" alt="" />
                                </td>
                                <td>{!! $item->deskripsi !!}</td>
                                <td>
                                    <a href="{{ route('speaker.edit', $item->id) }}" class="btn btn-primary btn-sm my-1">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <form action="{{ route('speaker.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center p-5">
                                    Data Tidak Tersedia
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
