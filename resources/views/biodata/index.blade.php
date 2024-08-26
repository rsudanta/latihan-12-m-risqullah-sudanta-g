@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
@endsection

@section('content')
    <div class="container">
        <a href="{{ route('biodata.create') }}" class="btn btn-primary">Add Data</a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Nama Lengkap</th>
                    <th class="text-center" scope="col">NIK</th>
                    <th class="text-center" scope="col">Umur</th>
                    <th class="text-center" scope="col">Alamat</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->umur }} Tahun</td>
                        <td>{{ $item->alamat }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-evenly">
                                <div>
                                     <a href="{{ route('biodata.show', $item->id) }}" class="btn btn-warning">Edit</a>
                                </div>

                                <form action="{{ route('biodata.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
