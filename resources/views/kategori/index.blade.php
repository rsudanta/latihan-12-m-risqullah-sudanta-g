@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
@endsection

@section('content')
    @auth
        <div class="container">
            <h1>Hi saya {{ auth()->user()->name }}</h1>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-4 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category['name'] }}</h5>
                                @foreach ($products as $product)
                                    <ul>
                                        @if ($category['id'] == $product['category_id'])
                                            <li>{{ $product['name'] }}  ({{$product['discount_percentage']}}%) <br>
                                                <del>
                                                    <small class="text-danger">
                                                        Rp{{ number_format($product['price']) }}
                                                    </small>
                                                </del>
                                                &nbsp;
                                                <small class="text-success">
                                                    Rp{{ number_format($product['discount_price']) }}
                                                </small>
                                            </li>
                                        @endif
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row mt-5">
                <h2>Products</h2>
                @foreach ($products as $product)
                    <div class="col-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['name'] }}</h5>
                                <small class="text-danger">Rp{{ number_format($product['price']) }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    @endauth
    @guest
        Anda belum login
    @endguest
@endsection
