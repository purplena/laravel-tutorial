<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10 pt-10">
            <!-- Sidebar -->
            <div class="col-span-4">
                <img src="/images/illustration-1.png" alt="illustration" class="rounded-xl" />
                <p class="mt-4 block text-gray-400 text-xs text-center">
                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>
                <div class="flex items-center justify-center text-sm mt-4">
                    <img src="/images/lary-avatar.svg" alt="Avatar" />
                    <div class="ml-3">
                        <h5 class="font-bold"><a href="/?author={{ $post->author->username }}">by
                                {{ $post->author->name }}</a>
                        </h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
            </div>

            <!-- Text -->
            <div class="col-span-8">
                <div class="flex justify-between justify-center mb-4 -mt-10">
                    <a href="/" class="relative inline-flex transition-colors duration-500 hover:text-blue-500">
                        <svg style="right: 12px" width="22" height="22" viewBox="0.83 1 20.15 20.15">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>
                        Back to Posts
                    </a>
                    <div class="space-x-2">
                        <x-category-button :category="$post->category" />
                    </div>
                </div>

                <h1 class="font-bold text-4xl mb-10">
                    {{ $post->title }}
                </h1>
                <div class="space-y-4 text-lg">
                    <p>
                        {!! $post->body !!}
                    </p>
                </div>
            </div>
        </article>
    </main>
</x-layout>
