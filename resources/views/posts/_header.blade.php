<header class="max-w-4xl mx-auto mt-20 text-center">
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500">Laravel From Scratch</span> News
        </h1>
        <h2 class="inline-flex mt-2">
            By Lary Laracore<img src="/images/lary-head.svg" alt="Head of Lary" />
        </h2>
        <p class="text-sm mt-14">
            Another year. Another update. We're refreshing the popular Laravel
            series with new content. I'm going to keep you guys up to speed with
            what's going on!
        </p>
        <div class="lg:tw-flex lg:tw-justify-center lg:space-x-4 mt-8 space-y-4 lg:space-y-0">
            <!-- Category -->
            <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
                <x-category-dropdown />
            </div>
            <!-- Other Filters -->
            {{-- <span class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                    <option value="other-filters" disabled selected>
                        Other Filters
                    </option>
                    <option value="foo">foo</option>
                    <option value="bar">bar</option>
                </select>
                <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px" width="22"
                    height="22" viewBox="0.83 1 20.15 20.15">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path class="fill-current"
                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                    </g>
                </svg>
            </span> --}}
            <!-- Search -->
            <span class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form action="/" method="GET">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input type="text" name="search" placeholder="Find something"
                        class="bg-transparent placeholder-black font-semibold text-sm focus-within:outline-none"
                        value="{{ request('search') }}">
                </form>
            </span>
        </div>
    </div>
</header>
