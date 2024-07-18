@extends('template')

@section('content')

   <div class="bg-gray-400 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
       <samp class="text-3xl font-bold">Programacion</samp>
       <h1 class="text-3xl font-bold mt-4">Blog</h1>
       <p class="text-sm text-gray-700">Proyecto de desarrollo web para prodesionales</p>
       <img src="{{ asset('images/dev.png') }}" class="absolute right-0 -bottom-20 opacity-60" >
   </div>
   <div>
       <h1 class="text-3xl mb-8 text-gray-900">Contenido tecnico</h1>
       <div class="grid grid-cols-1 gap-4 mb-4">
           @foreach($posts as $post)
            <a href="{{ route('post', $post->slug)}}" class="bg-gray-100 rounded-lg px-6 py-4">
                <p class="text-gray-500 text-xs flex items-center gap-2">
                    <span class="font-bold">Tutorial</span>
                    {{ $post->created_at->format('d/m/Y') }}
                </p>
                <h2 class="text-lg font-bold">{{ $post->title }}</h2>
                <div class="text-gray-500 opacity-75 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                      </svg>

                    {{ $post->user->name }}
                </div>
            </a>

           @endforeach
       </div>

       {{ $posts->links() }}
   </div>

@endsection
