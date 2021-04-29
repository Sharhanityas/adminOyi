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
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>event</th>
                                    <th>nama pembicara</th>
                                    <th>email</th>
                                    <th>telepon</th>
                                    <th>foto</th>
                                    <th>deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                               @forelse ($items as $item)
                                    <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->event->judul_event }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->telepon }}</td>
                                    <td>
                                        <img src="{{ url($item->foto) }}" alt=""/>
                                    </td>
                                    <td>{!! $item->deskripsi !!}</td>
                                    <td>
                                        <a href="{{ route("speaker.edit" , $item->id) }}" class = "btn btn-primary btn-sm">
                                            <i class="fa fa-pencil">
                                            </i>
                                        </a>
                                        <form action="{{ route("speaker.destroy", $item->id) }}"
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