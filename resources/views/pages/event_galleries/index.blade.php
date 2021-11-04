@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-tittle">
                            Daftar Foto Events
                        </h4>
                    </div>
                </div class="card-body--">
                <table id="myTable" class="display">
                    <thead>
                        <tr class="text-uppercase">
                            <th class="col-1">no</th>
                            <th>judul event</th>
                            <th class="col-3">foto</th>
                            <th class="col-1">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    {{ $item->event->judul_event }}
                                </td>
                                <td>
                                    <img src="{{ url($item->gambar_event) }}" alt="" />
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('event_galleries.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"> </i>
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
