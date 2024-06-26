@extends('layouts.app')


@section('content')
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="image describing the following{{ $comic['title'] }}">
            </div>
            <div class="col">

                <div class="card">
                    <div class="card-body bg-white">
                        <h2 class="card-title"> {{ $comic['title'] }} </h2>
                        <p class="card-text">
                            {{ $comic['description'] }}
                        </p>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <span><strong>type:{{ $comic['type'] }} </strong></span>
                        <span><strong>price:{{ $comic['price'] }} </strong></span>
                        <span><strong>serie:{{ $comic['series'] }} </strong></span>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
