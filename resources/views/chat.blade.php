@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="card px-4 py-4 mt-2 container">
            <div style="max-height: 400px; overflow-y:auto;">
                @foreach ($historyChat as $item)
                    <div class="alert alert-secondary ms-auto" style="max-width: 80%;" role="alert">
                        {{ $item->send_chat }}
                    </div>
                    <div class="alert alert-primary me-auto" style="max-width: 80%;" role="alert">
                        {!! Str::markdown($item->get_chat) !!}
                    </div>
                @endforeach
            </div>
            <form action="{{ route('history-chat.store') }}" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" name="chat" id="chat" placeholder="Chat..">
                </div>
                <button type="submit" class="btn btn-primary w-100 btn-sm" id="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
