{{-- resources/views/home.blade.php --}}
<style>
    [data-carousel-slide-to][aria-current="true"] {
        background-color: #774383;
        opacity: 1;
    }
    [data-carousel-slide-to][aria-current="false"] {
        background-color: #502C58;
        opacity: 0.5;
    }
    #default-carousel .carousel-wrapper {
        height: 30rem;
    }
    @media (min-width: 768px) {
        #default-carousel .carousel-wrapper {
            height: 35rem;
        }
    }
</style>

<x-layout>
    <x-homepage.hero />
    <x-homepage.carousel :carouselItems="$announcements" />

    <!-- Be Updated Section -->
    <div id="be-updated-section" class="pt-12 pb-4">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="mb-4 md:mb-6">

                <!-- Header Section -->
                <div class="mb-8">
                    <div class="flex flex-nowrap items-center justify-between gap-4">
                        <h2 class="text-5xl font-extrabold text-[#48BDAC] whitespace-nowrap overflow-hidden text-ellipsis">
                            <span class="text-[#2e2e2e]">Be&nbsp;</span>
                            <span class="text-[#48BDAC]">Updated</span>
                        </h2>

                        <div class="flex items-center gap-3">
                            @livewire('be-updated-header-toggle', [], ('paw-toggle'))

                            <!-- Post Button -->
                            <a href="{{ route('updates.post') }}"
                                class="flex-shrink-0 flex items-center text-sm font-medium text-white bg-[#48BDAC] rounded-lg px-6 py-3 hover:bg-[#48BDAC]/90 focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:ring-offset-1 transition">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 5V15M5 10H15" />
                                </svg>
                                Post
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Updates Grid -->
                @livewire('be-updated', [], 'updates-grid')

            </div>
        </div>
    </div>

    @include('components.modals.carousel')
</x-layout>
