@extends('layout.master')

@section('title', 'Home')

@section('content')

<div class="jumbotron d-flex flex-row justify-content-center m-2">
    <div class="w-25 m-2">
        @foreach ($popular as $pop)
            <figure class="figure align-self-center">
                <img src="{{ asset('/wide.jpeg') }}" class="figure-img img-fluid rounded" alt="/{{ $pop->Detail->imgURL }}">
            </figure>
        @endforeach
    </div>

    <div class="w-75">
        <div><u>IT REALLY COUNTS</u></div>
        @foreach ($popular as $pop)
            <div class="h1" style="font-family: Georgia, serif;">{{ $pop->title }}</div>
            <div>{{ $pop->description }}</div>
        @endforeach
    </div>
</div>

<div class="pt-2 m-3"><u>LATEST BOOK REVIEWS</u></div>
<div class="d-flex flex-wrap flex-row justify-content-around mb-3 m-2">
        @foreach ($latest as $l)
            <a href="/book/{{ $l->id }}" class="text-decoration-none text-dark">
                <div class="m-1" style="width: 18rem;">
                    <img src="{{ asset('/wide.jpeg') }}" class="card-img-top" alt="/{{ $pop->Detail->imgURL }}">
                    <div class="card-body">
                    <h5 class="card-title" style="font-family: Georgia, serif;">{{ $l->title }}</h5>
                    <p class="card-text">{{ $l->description }}</p>
                    </div>
                </div>
            </a>
        @endforeach
</div>

<div class="jumbotron bg-dark">
    <div class="pt-3 m-3 text-light"><u>Book Series Review</u></div>
    <div class="d-flex flex-wrap flex-row justify-content-around m-2">
            @foreach ($posts as $post)
                <a href="/book/{{ $post->id }}" class="text-decoration-none text-light">
                    <div class="m-2 h-400 d-flex flex-column justify-content-between" style="width: 18rem;">
                        <img src="{{ asset('/wide.jpeg') }}" class="card-img-top" alt="/{{ $pop->Detail->imgURL }}">
                        <div class="card-body ">
                            <h5 class="card-title m-2 h6">{{ $post->title }}</h5>
                            <button type="button" class="m-2 btn btn-outline-light">Read Post</button>
                        </div>
                    </div>
                </a>
            @endforeach
    </div>
</div>

@endsection
