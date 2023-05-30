@extends('layout.master')

@section('title', 'Home')

@section('content')

<div class="jumbotron d-flex flex-row justify-content-center m-2">
    <div>
        Image
    </div>
    <div class="w-75">
        <div><u>IT REALLY COUNTS</u></div>
        @foreach ($popular as $pop)
            <div class="h1" style="font-family: Georgia, serif;">{{ $pop->title }}</div>
            <div>{{ $pop->description }}</div>
        @endforeach
    </div>
</div>

<div class="pt-5"><u>LATEST BOOK REVIEWS</u></div>
<div class="d-flex flex-wrap flex-row justify-content-around m-2">
        @foreach ($latest as $l)
            <a href="/book/{{ $l->id }}" class="text-decoration-none text-dark">
                <div class="card m-1" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $l->title }}</h5>
                    <p class="card-text">{{ $l->description }}</p>
                    </div>
                </div>
            </a>
        @endforeach
</div>


<div class="pt-5"><u>Book Series Review</u></div>
<div class="d-flex flex-wrap flex-row justify-content-around m-2">
        @foreach ($posts as $post)
            <a href="/book/{{ $post->id }}" class="text-decoration-none text-dark">
                <div class="card m-1" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </a>
        @endforeach
</div>
@endsection
