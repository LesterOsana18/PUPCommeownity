<div id="be-updated-section" class="py-12">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="mb-12 md:mb-16">

            <!-- Header Section -->
            <div class="mb-8">
                <div class="flex flex-nowrap items-center justify-between gap-4">
                    <h2 class="text-5xl font-extrabold text-[#48BDAC] whitespace-nowrap overflow-hidden text-ellipsis">
                        <span class="text-[#2e2e2e]">Be&nbsp;</span>
                        <span class="text-[#48BDAC]">Updated</span>
                    </h2>
                    <a href="{{ route('updates.create') }}" class="flex-shrink-0 flex items-center text-sm font-medium text-white bg-[#48BDAC] rounded-lg px-6 py-3 hover:bg-[#48BDAC]/90 focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:ring-offset-1 transition">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" aria-hidden="true">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5V15M5 10H15" />
                        </svg>
                        Post
                    </a>
                </div>

                <!-- Search -->
                <form role="search" action="{{ route('updates.search') }}" method="get" class="w-full max-w-2xl mt-6 mx-auto">
                    <label for="be-updated-search" class="sr-only">Search articles, events, and more</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 19l-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="be-updated-search" name="q"
                            class="block w-full pl-10 pr-24 py-3 text-sm text-gray-900 border border-primary rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:border-transparent transition"
                            placeholder="Search for articles, events, and more…" required />
                        <button type="submit"
                                class="absolute inset-y-0 right-0 px-4 flex items-center text-sm font-medium text-white bg-[#48BDAC] rounded-r-lg hover:bg-[#48BDAC]/90 focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:ring-offset-1 transition">
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <!-- Grid of Updates -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($updates as $update)
                    <div class="p-6 rounded-lg shadow border border-gray-200 backdrop-blur-md bg-white/60 hover:bg-[#0a9396]/10">
                        <img src="{{ asset($update->image_path) }}" class="w-full h-40 object-cover rounded-t-lg" alt="{{ $update->title }}">
                        <h3 class="text-lg font-semibold text-[#502C58] mt-4">
                            {{ $update->title }}
                        </h3>
                        <p class="text-sm text-gray-500 mb-3">{{ $update->author }}</p>
                        <div class="text-gray-700 mb-4">
                            <p>{{ $update->excerpt }}</p>
                        </div>
                        <a href="{{ route('updates.show', $update->id) }}" class="text-[#502C58] font-medium hover:underline flex items-center">
                            Read more
                            <svg class="w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                {{ $updates->links() }}
            </div>

        </div>
    </div>
</div>
