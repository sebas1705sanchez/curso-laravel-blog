@extends('template')

@section('content')

    @foreach ($posts as $post)

        <p>
            <strong>{{ $post->id }}</strong>
            <a href="{{ route('post', $post->slug) }}">
                {{ $post->title }}
            </a>
            <br>
            <samp>{{ $post->user->name }}</samp>
        </p>

    @endforeach

    {{ $posts->links() }}

@endsection
