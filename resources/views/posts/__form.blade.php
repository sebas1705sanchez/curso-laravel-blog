@csrf

<label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
    Titulo
</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>
<input type="text" name="title" class="rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('title', $post->title) }}">

<label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
    Slug
</label>
<span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>
<input type="text" name="slug" class="rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('slug', $post->slug) }}">

<label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
    Contenido
</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
<textarea name="body" id="" cols="30" rows="10" class="rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between items-center mt-4">
    <a href="{{ route('posts.index') }}" class="text-xs bg-gray-800 text-white rounded px-2 py-1">Volver</a>

    <input type="submit" value="Enviar" class="text-xs bg-gray-800 text-white rounded px-2 py-1">
</div>
