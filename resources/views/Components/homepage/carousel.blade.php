@props(['carouselItems'])

<section class="w-full py-8" style="background-image: url('/images/carousel-waves.svg'); background-size: cover;">
    <div class="h-12"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-5xl font-extrabold text-center mb-8">
            <span class="text-[#502C58]">Announcements</span>
        </h2>

        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative carousel-wrapper overflow-hidden rounded-lg">
                @foreach ($carouselItems as $index => $item)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="absolute w-full h-full flex flex-col">

                            {{-- Optional image display --}}
                            @if (!empty($item->image_path))
                                <div class="relative w-full h-2/3">
                                    <img src="{{ asset(str_replace('public\\', '', $item->image_path)) }}" class="w-full h-full object-cover" alt="{{ $item->title }}">
                                </div>
                            @endif

                            <div class="w-full h-1/3 bg-white p-6 overflow-y-auto">
                                <h3 class="text-2xl font-bold text-[#502C58] mb-2">{{ $item->title }}</h3>
                                <p class="text-sm text-gray-500 mb-3">
                                    By {{ $item->author }} • {{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y \a\t g:i A') }}
                                </p>
                                <div class="text-gray-700 mb-4">
                                    <p>{{ Str::limit(strip_tags($item->content), 150) }}</p>
                                </div>
                                <button
                                    type="button"
                                    class="text-[#502C58] font-medium hover:underline flex items-center"
                                    data-announcement='@json($item)'
                                    onclick="event.stopPropagation(); openCarouselModal(this)"
                                >
                                    Read more
                                    <svg class="w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 top-[calc(66.67%-2.25rem)] left-1/2 space-x-3 rtl:space-x-reverse">
                @foreach ($carouselItems as $index => $item)
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-[#502C58] {{ $index === 0 ? 'opacity-100' : 'opacity-50' }}"
                        aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $index + 1 }}"
                        data-carousel-slide-to="{{ $index }}"></button>
                @endforeach
            </div>

            <!-- Controls -->
            <button type="button" class="absolute top-[-5.5rem] start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/30 group-hover:bg-[#502C58]/50 group-focus:ring-4 group-focus:ring-[#502C58]/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-black rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-[-5.5rem] end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/30 group-hover:bg-[#502C58]/50 group-focus:ring-4 group-focus:ring-[#502C58]/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-black rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</section>
