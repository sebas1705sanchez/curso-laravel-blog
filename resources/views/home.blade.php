@extends('template')

@section('content')

   <div>
       <h1>Home</h1>
   </div>
   <div>
       <h1 class="text-3xl mb-8 text-gray-900">Contenido tecnico</h1>
       <div class="grid grid-cols-1 gap-4 mb-4">
           @foreach($posts as $post)
            <a href="" class="bg-gray-100 rounded-lg px-6 py-4">
                <p class="text-gray-500 text-xs flex items-center gap-2">
                    <span class="font-bold">Tutorial</span>
                    {{ $post->created_at->format('d/m/Y') }}
                </p>
                <h2 class="text-lg font-bold">{{ $post->title }}</h2>
            </a>

           @endforeach
       </div>

       {{ $posts->links() }}
   </div>

@endsection
