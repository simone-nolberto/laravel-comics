@extends('layouts.app')

@section('content')
    <div class="jumbotron">
    </div>

    <div class="bg-dark py-5 comics-container">
        <div class="row row-cols-1 row-cols-md-6 g-4">

            @foreach ($comics as $index => $comic)
                <a href="{{ route('comic', ['id' => $index]) }}">
                    <div class="col">
                        <div class="card border-0 text-white">
                            <img class="card-img-top" src="{{ $comic['thumb'] }}"
                                alt="image describing the following{{ $comic['title'] }}">
                            <div class="card-body bg-dark">
                                {{ $comic['title'] }}
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>

    
@endsection
