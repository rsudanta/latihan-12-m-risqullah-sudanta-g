@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="card px-4 py-4 mt-2 container">
            <form action="{{ route('biodata.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama.."
                        value="{{ $data->nama }}">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK.."
                        value="{{ $data->nik }}">
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur.."
                        value="{{ $data->umur }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat.."
                        value="{{ $data->alamat }}">
                </div>
                <button type="submit" class="btn btn-primary w-100 btn-sm" id="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
