@extends('layout.master')

@section('title', 'Home')

@section('content')
<div class="m-3"><u>IT REALLY COUNTS</u></div>

<div class="h1 m-3" style="font-family: Georgia, serif;">{{ $post->title }}</div>
<div class="m-3">{{ $post->description }}</div>

<div class="m-3">By <b> {{ $post->Detail->author }} </b> | {{ $post->created_at->format('F j, Y') }}
    <span class="badge bg-dark">{{ $post->TimeCategory->name }}</span>
</div>

<div class="d-flex justify-content-center m-3">
    <figure class="figure align-self-center">
        <img src="{{ asset('/wide.jpeg') }}" class="figure-img img-fluid rounded" alt="/{{ $post->Detail->imgURL }}">
        <figcaption class="figure-caption">A caption for the above image.</figcaption>
    </figure>
</div>
<div class="m-3 text-justify">
    {{ $post->Detail->body }}
</div>

<div class="m-3">
    <div class="m-1"><b>Video Section</b></div>
    <br>

    <div class="d-flex justify-content-center"><iframe width="560" height="315" src="https://www.youtube.com/embed/hsY-jBUYstM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
</div>

@endsection
