@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-tittle">
                            Daftar Reviews
                        </h4>
                    </div>
                </div class="card-body--">
                <table id="myTable" class="display">
                    <thead>
                        <tr class="text-uppercase ">
                            <th class="text-center">no</th>
                            <th>Kata</th>
                            <th class="col-3">Detail</th>
                            <th class="col-2 text-center">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-justify">{!! $item->kata !!}</td>
                                <td>{!! $item->detail !!}</td>
                                <td class="text-center">
                                    <a href="{{ route('review.gallery', $item->id) }}" class="btn btn-info btn-sm">
                                        <i class="fa fa-picture-o">
                                        </i>
                                    </a>
                                    <a href="{{ route('review.edit', $item->id) }}" class="btn btn-primary btn-sm my-1">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <form action="{{ route('review.destroy', $item->id) }}" method="post"
                                        class="d-inline ">
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
@endsection
