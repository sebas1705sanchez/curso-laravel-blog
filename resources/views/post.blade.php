@extends('template')

@section('content')
    <div class="p-6 text-gray-900 dark:text-gray-100 align-center">
        <h1 class="text-5xl font-bold mb-8">{{ $post->title }}</h1>
    </div>
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <p class="leading-loose text-gray-700">{!! $post->body !!}</p>
    </div>
@endsection


