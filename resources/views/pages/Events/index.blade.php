@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <<<<<<< HEAD <h4 class="box-tittle text-center text-uppercase">
                            =======
                            <h4 class="box-tittle">
                                >>>>>>> 827494a1de68adc33ae0d01c5808ace51fa70913
                                Daftar Events
                            </h4>
                    </div>
                </div class="card-body--">
                <table id="myTable" class="display">
                    <thead>
                        <tr class="text-uppercase">
                            <th>no</th>
                            <th>judul</th>
                            <th>tanggal</th>
                            <th>link</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                {{-- <td>{{ $item->judul_event }}</td> --}}
                                <td><span data-toggle="tooltip" data-placement="top" title="{{ $item->judul_event }}">
                                        {{ substr(strip_tags($item->judul_event), 0, 25) }}
                                        {{ strlen(strip_tags($item->judul_event)) > 25 ? '...' : '' }} </span></td>

                                <td>{{ $item->tanggal_event }}</td>

                                {{-- untuk link masih terkoneksi ke local --}}
                                <td> <a href="https://{{ $item->link }}" target="_blank">
                                        {{ substr(strip_tags($item->link), 0, 25) }}
                                        {{ strlen(strip_tags($item->link)) > 35 ? '...' : '' }} </a>
                                </td>
                                <td>
                                    <a href="{{ route('event.gallery', $item->id) }}" class="btn btn-sm btn-info">
                                        <i class="fa fa-picture-o"></i>
                                    </a>
                                    <a href="{{ route('event.edit', $item->id) }}" class="btn btn-sm btn-primary  my-1">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <form action="{{ route('event.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger ">
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
