@extends('layouts.default')

@section('content')
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-tittle">
                                Daftar Events
                            </h4>
                        </div>
                    </div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>judul</th>
                                    <th>tanggal</th>
                                    <th>waktu</th>
                                    <th>tempat</th>
                                    <th>deskripsi</th>
                                    <th>link</th>
                                </tr>
                            </thead>
                            <tbody>
                               @forelse ($items as $item)
                                    <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->judul_event }}</td>
                                    <td>{{ $item->tanggal_event }}</td>
                                    <td>{{ $item->waktu }}</td>
                                    <td>{{ $item->tempat }}</td>
                                    <td>{!! $item->deskripsi !!}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>
                                        <a href="{{ route('event.gallery' , $item->id) }}" class = "btn btn-info btn-sm">
                                            {{-- <a href="#" class = "btn btn-info btn-sm"> --}}
                                            <i class="fa fa-picture-o">
                                            </i>
                                        </a>
                                        <a href="{{ route("event.edit" , $item->id) }}" class = "btn btn-primary btn-sm">
                                            <i class="fa fa-pencil">
                                            </i>
                                        </a>
                                        <form action="{{ route("event.destroy", $item->id) }}"
                                             method="post"
                                              class="d-inline">
                                              @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash">
                                                     
                                                </i>
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
        </div>
@endsection