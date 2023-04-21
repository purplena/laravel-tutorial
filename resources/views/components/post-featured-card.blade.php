@props(['post'])
<article
    class="rounded-xl transition-colors duration-500 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        {{-- Image --}}
        <div class="flex-1 lg:mr-8">
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Illustration" class="rounded-xl" />
        </div>
        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    {{-- Category and link to see all the posts of the category --}}
                    {{-- <a href="/categories/{{ $post->category->slug }}"
                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 uppercase font-semibold"
                        style="font-size: 10px">{{ $post->category->name }}</a> --}}
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    {{-- Title --}}
                    <h1 class="text-3xl"><a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}</a>
                    </h1>
                    {{-- Time when the post was created --}}
                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>
            {{-- Excerpt of the post --}}
            <div class="text-sm mt-2 space-y-4">
                <p>
                    {!! $post->excerpt !!}
                </p>
                <p class="mt-4">
                    {!! $post->excerpt !!}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Avatar" />
                    <div class="ml-3">
                        {{-- Author of the blog-post --}}
                        <h5 class="font-bold"><a href="/?author={{ $post->author->username }}">by
                                {{ $post->author->name }}</a>
                        </h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
                <div>
                    {{-- Link to read a post entirely --}}
                    <a href="/posts/{{ $post->slug }}"
                        class="text-xs font-semibold bg-gray-200 rounded-full py-2 px-8">Read
                        more</a>
                </div>
            </footer>
        </div>
    </div>
</article>
