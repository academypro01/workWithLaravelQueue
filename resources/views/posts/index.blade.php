@extends('posts.layouts.app')

@section('title', 'Home Page')

@section('content')
    <ul>
        @foreach($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}">
                <li>{{ $post->title }}</li>
            </a>
        @endforeach
    </ul>
@endsection
