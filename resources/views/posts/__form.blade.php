@csrf

<label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
    Titulo
</label>
<input type="text" name="title" class="rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('title', $post->title) }}">

<label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
    Contenido
</label>
<textarea name="body" id="" cols="30" rows="10" class="rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between items-center mt-4">
    <a href="{{ route('posts.index') }}" class="text-xs bg-gray-800 text-white rounded px-2 py-1">Volver</a>

    <input type="submit" value="Enviar" class="text-xs bg-gray-800 text-white rounded px-2 py-1">
</div>
