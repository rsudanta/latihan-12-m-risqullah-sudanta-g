@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="card px-4 py-4 mt-2 container">
            @if (session('input'))
                <div class="alert alert-secondary ms-auto" style="width: 80%" role="alert">
                    {{ session('input') }}
                </div>
            @endif
            @if (session('response'))
                <div class="alert alert-primary ml-auto" style="width: 80%" role="alert">
                    {!! Str::markdown(session('response')) !!}
                </div>
            @endif
            <form action="{{ route('chat') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="chat" id="chat" placeholder="Chat..">
                </div>
                <button type="submit" class="btn btn-primary w-100 btn-sm" id="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
