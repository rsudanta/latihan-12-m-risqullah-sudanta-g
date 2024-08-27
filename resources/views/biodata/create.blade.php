@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="card px-4 py-4 mt-2 container">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('biodata.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama..">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK..">
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur..">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat..">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <button type="submit" class="btn btn-primary w-100 btn-sm" id="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
