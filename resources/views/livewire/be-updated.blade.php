<div>
    <!-- Search -->
    <div class="w-full max-w-2xl mt-6 mx-auto">
        <label for="be-updated-search" class="sr-only">Search articles, events, and more</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 19l-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input
                type="search"
                id="be-updated-search"
                wire:model="search"
                class="block w-full pl-10 pr-24 py-3 text-sm text-gray-900 border border-primary rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:border-transparent transition"
                placeholder="Search for posts" />
            <button
                type="button"
                wire:click="$refresh"
                class="absolute inset-y-0 right-0 px-4 flex items-center text-sm font-medium text-white bg-[#48BDAC] rounded-r-lg hover:bg-[#48BDAC]/90 focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:ring-offset-1 transition">
                Search
            </button>
        </div>
    </div>

    <!-- Updates Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
        @foreach ($updates as $update)
            <div wire:key="update-{{ $update->id }}" class="relative p-6 rounded-lg shadow border border-gray-200 backdrop-blur-md bg-white/60 hover:bg-[#0a9396]/10">
                <img src="{{ asset($update->image_path) }}" class="w-full h-40 object-cover rounded-t-lg" alt="{{ $update->title }}">
                <h3 class="text-lg font-semibold text-[#502C58] mt-4">{{ $update->title }}</h3>
                <p class="text-sm text-gray-500 mb-3">{{ $update->author }}</p>
                <div class="text-gray-700 mb-4">
                    <p>{{ $update->excerpt }}</p>
                </div>
                <button
                    type="button"
                    wire:click="showUpdate({{ $update->id }})"
                    class="text-[#502C58] font-medium hover:underline flex items-center"
                >
                    Read more
                    <svg class="w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>
                <!-- Toggle Button -->
                @auth
                <div
                    wire:click="togglePaw({{ $update->id }})"
                    class="absolute bottom-4 right-4 cursor-pointer transition-transform duration-300 hover:scale-110"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 1080 1080"
                        class="w-10 h-10 transition-colors duration-300 {{ $update->pawedByUsers->contains(auth()->id()) ? 'text-[#502C58]' : 'text-gray-300' }}"
                        fill="currentColor"
                        @class([
                            'text-[#502C58]' => $update->pawedByUsers->contains(auth()->id()),
                            'text-gray-300' => !$update->pawedByUsers->contains(auth()->id()),
                        ])
                    >
                        <path fill-rule="evenodd" d="M836.79,272.34c-10.78,40.25-33.78,75.46-63.92,97.89-30.14,22.43-64.96,30.24-96.8,21.7-31.84-8.53-58.09-32.7-72.98-67.2s-17.19-76.48-6.41-116.74c22.46-83.82,94.41-137.36,160.72-119.6,66.3,17.77,101.84,100.12,79.38,183.93Z"/>
                        <path fill-rule="evenodd" d="M1047.47,547.73c-20.84,36.09-52.16,64.15-87.08,78.01-34.92,13.86-70.57,12.39-99.12-4.09-59.45-34.32-72.46-123.06-29.08-198.21,43.39-75.15,126.75-108.25,186.2-73.92,28.55,16.48,47.65,46.62,53.1,83.8,5.45,37.17-3.19,78.33-24.02,114.42Z"/>
                        <ellipse cx="140.17" cy="485.59" rx="124.29" ry="157.12" transform="translate(-224.02 135.14) rotate(-30)" fill="currentColor"/>
                        <ellipse cx="365.86" cy="240.18" rx="124.29" ry="157.12" transform="translate(-49.7 102.88) rotate(-15)" fill="currentColor"/>
                        <path fill-rule="evenodd" d="M547.64,470c-94.72,0-171.51,73.71-171.51,164.64.07,11.59,1.41,23.14,4.01,34.44-97.87,15.41-168.33,82.88-168.43,161.26,0,43.67,22.09,85.54,61.41,116.42,39.32,30.88,92.64,48.22,148.25,48.22,47.04-.01,92.71-12.45,129.66-35.3,36.87,22.8,82.41,35.24,129.34,35.3,55.6,0,108.93-17.35,148.25-48.22,39.32-30.88,61.41-72.75,61.41-116.42-.11-80.21-73.81-148.69-174.51-162.13,2.41-11.03,3.63-22.28,3.65-33.57,0-90.93-76.79-164.64-171.51-164.64Z"/>
                    </svg>
                </div>
                @endauth
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="overflow-hidden mb-0 pb-0">
        <div class="mt-4 mb-0 flex justify-center">
            {{ $updates->links() }}
        </div>
    </div>

    <!-- Read More Modal (teleported to <body>) -->
    <template x-teleport="body">
        <div
            wire:ignore.self
            x-data="{ showModal: @entangle('modalOpen').live }"
            x-effect="document.body.classList.toggle('overflow-hidden', showModal)"
            x-show="showModal"
            x-cloak
            x-transition
            class="fixed inset-0 z-[9999] bg-black/50 backdrop-blur-sm flex items-center justify-center"
        >
            <div
                @click.away="showModal = false; $wire.set('modalOpen', false)"
                class="relative bg-white rounded-2xl max-w-2xl w-full shadow-lg p-6"
            >
                <button
                    @click="showModal = false; $wire.set('modalOpen', false)"
                    class="absolute top-4 right-4 text-gray-600 hover:text-black text-xl"
                >
                    <i class="fa-solid fa-xmark"></i>
                </button>

                @if ($selectedUpdate)
                    <h2 class="text-2xl font-extrabold text-[#502C58] mb-2">{{ $selectedUpdate['title'] }}</h2>
                    <p class="text-sm text-gray-500 mb-4">
                        By {{ $selectedUpdate['author'] }}
                        @if (!empty($selectedUpdate['created_at']))
                            • {{ \Carbon\Carbon::parse($selectedUpdate['created_at'])->format('F j, Y \a\t g:i A') }}
                        @endif

                        @php
                            $pawCount = \App\Models\Update::find($selectedUpdate['id'])?->pawedByUsers()->count() ?? 0;
                        @endphp

                        • Pawed {{ $pawCount }} {{ Str::plural('time', $pawCount) }}
                    </p>
                    @php
                        $isDefaultImage = $selectedUpdate['image_path'] === 'images/def-img.svg';
                    @endphp

                    @if (!empty($selectedUpdate['image_path']) && !$isDefaultImage)
                        <div class="mb-4">
                            <img src="{{ asset($selectedUpdate['image_path']) }}"
                                alt="{{ $selectedUpdate['title'] }}"
                                class="w-full h-auto max-h-64 object-cover rounded-lg" />
                        </div>
                    @endif
                    <div class="text-gray-600 text-sm leading-relaxed max-h-48 overflow-y-auto pr-2 px-3 py-2 rounded-md border border-gray-200 bg-gray-50">
                        {!! nl2br(e(ltrim($selectedUpdate['content']))) !!}
                    </div>
                @endif
            </div>
        </div>
    </template>

    <script>
    document.addEventListener('livewire:load', () => {
        Livewire.on('paw-toggled', ({ status }) => {
            const message = status === 'pawed'
                ? '🐾 Paw saved successfully!'
                : '🚫 Paw removed.';

            alert(message);
        });
    });
</script>
</div>
