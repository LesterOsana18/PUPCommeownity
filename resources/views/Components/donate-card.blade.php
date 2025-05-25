<div class="max-w-sm w-full mx-auto relative border border-gray-200 rounded-2xl shadow-lg text-center flex flex-col overflow-hidden bg-white">
    <!-- Image Section -->
    <div class="pt-6 px-6">
        <a class="block w-full mb-1">
            <img src="{{ $img }}" alt="{{ $alt }}"
                class="w-full h-56 object-contain rounded-t-xl bg-white shadow-none border-0"/>
        </a>
    </div>

    <!-- Description Section -->
    <div class="bg-[#E7AB39] rounded-b-2xl px-6 py-5 mt-4 flex-1 flex flex-col justify-between">
        <a>
            <h5 class="text-xl md:text-2xl font-extrabold uppercase text-center text-[#502C58] tracking-wide mb-2" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">
                {{ $title }}
            </h5>
        </a>
        @if(isset($name))
            <p class="text-center text-white font-semibold" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">{{ $name }}</p>
        @endif
        @if(isset($number))
            <p class="text-center text-white font-semibold" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">{{ $number }}</p>
        @endif
    </div>
</div>
