@extends('layouts.app')

@section('content')

<div class="jumbotron">
</div>

<div class="container bg-black py-5">
    <div class="row row-cols-1 row-cols-md-6 g-4">

        @foreach($comics as $comic)
        <div class="col">
            <div class="card border-0">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="image describing the following{{$comic['title']}}">
                <div class="card-body">
                    {{$comic['title']}}
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

<div class="container bg-primary">
    <div class="row">
        <ul class="list-unstyled d-flex">
            <li>Digital Comics</li>
            <li>DC Merchandise</li>
            <li>Subscription</li>
            <li>Comic Shop Locator</li>
            <li>DC Power Visa</li>
        </ul>
    </div>
</div>


@endsection