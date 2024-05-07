@extends('layouts.app')

@section('content')

<div class="jumbotron">
</div>

<div class="bg-dark py-5 comics-container">
    <div class="row row-cols-1 row-cols-md-6 g-4">

        @foreach($comics as $comic)
        <div class="col">
            <div class="card border-0 text-white">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="image describing the following{{$comic['title']}}">
                <div class="card-body bg-dark">
                    {{$comic['title']}}
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

<div class="bg-primary bottom-nav">
    <div class="row">
        <ul class="list-unstyled text-white">
            <li><img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">Digital Comics</li>
            <li><img src="{{Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">DC Merchandise</li>
            <li><img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">Subscription</li>
            <li><img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">Comic Shop Locator</li>
            <li><img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">DC Power Visa</li>
        </ul>
    </div>
</div>


@endsection