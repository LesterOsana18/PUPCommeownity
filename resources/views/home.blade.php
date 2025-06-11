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
    @livewire('be-updated', [], 'be-updated')

    @include('components.modals.carousel')
</x-layout>
