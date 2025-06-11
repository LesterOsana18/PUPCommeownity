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

                        @auth
                            @livewire('post-update', [], 'post-update')
                        @endauth
                    </div>
                </div>

                @livewire('be-updated', [], 'updates-grid')

            </div>
        </div>
    </div>
    @include('components.modals.carousel')
</x-layout>
