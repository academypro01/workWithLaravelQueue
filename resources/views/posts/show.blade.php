@extends('posts.layouts.app')

@section('title', 'Show Post')

@section('content')
    <h1 class="text-center text-secondary">{{$post->title}}</h1>
    <p class="text-justify">{{$post->description}}</p>
    <p class="text-secondary">{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
    <hr>
    <show-post-component views="{{ $post->views }}" :id="{{ $post->id }}"></show-post-component>

@endsection
