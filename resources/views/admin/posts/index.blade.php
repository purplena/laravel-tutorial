<x-layout>
    <x-setting heading="Manage Posts">
        <table class="min-w-full divide-y divide-gray-200">

            @foreach ($posts as $post)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right font-medium text-sm">
                        <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right font-medium text-sm">
                        <form action="/admin/posts/{{ $post->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-xs text-gray-400">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </x-setting>
</x-layout>
