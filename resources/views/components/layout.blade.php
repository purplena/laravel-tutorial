<!DOCTYPE html>

<head>
    <title>Laravel from scratch Blog</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
    {{-- <script src="../../alpine/packages/alpinejs/dist/cdn.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center max-w-6xl mx-auto">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracast Logo" width="165" height="65" />
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</button>
                        </x-slot>

                        @admin
                            <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts') ? true : false">All Posts</x-dropdown-item>
                            <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create') ? true : false">New Post</x-dropdown-item>
                        @endadmin

                        <x-dropdown-item href="#" x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()">Log Out
                        </x-dropdown-item>

                        <form id="logout-form" action="/logout" method="POST" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a href="/register" class="text-xs font-bold uppercase">Register</a>
                    <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>
                @endguest
                <a href="#newsletter"
                    class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Subscribe
                    for Updates</a>
            </div>
        </nav>

        {{ $slot }}

        <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.png" alt="Avatar" class="mx-auto" style="width: 145px" />
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto bg-gray-200 rounded-full">
                    <form method="post" action="/newsletter" class="flex text-sm">
                        @csrf
                        <div class="py-3 px-5 inline-flex items-center">
                            <label for="email" class="hidden md:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="letter icon" />
                            </label>
                            <input id='email' name="email" type="text" placeholder="Your email address"
                                class="bg-transparent pl-4 focus-within:outline-none" />

                        </div>
                        <button type="submit"
                            class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8 hover:bg-blue-700">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            @error('email')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </footer>
    </section>
    <x-flash />
</body>
