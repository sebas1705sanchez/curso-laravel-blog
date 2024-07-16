<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        @forelse ($posts as $post)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $post->id }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $post->title }}
                                </td>
                                <td class="py-4 px-6">
                                    <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                </td>
                                <td class="py-4 px-6">
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">
                                    No posts
                                </td>
                            </tr>
                        @endforelse
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
