<div x-data="{ showModal: @entangle('showModal') }">
    <!-- Modal Backdrop -->
    <div x-show="showModal"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center px-4">

        <!-- Modal Content -->
        <div x-show="showModal"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="bg-white rounded-2xl shadow-xl p-6 w-full max-w-5xl max-h-[90vh] overflow-y-auto relative">

            <!-- Close Button -->
            <button @click="showModal = false"
                class="absolute top-10 right-4 text-gray-500 hover:text-black text-2xl leading-none focus:outline-none lg:top-4">
                &times;
            </button>

            @if($event)
                <!-- Modal Header -->
                <div class="mb-6 flex flex-col md:flex-row md:items-center gap-6">
                    <div class="w-full md:w-1/3 flex-shrink-0">
                        <img src="{{ asset('storage/' . $event->image_path) }}" alt="{{ $event->name }}" class="mt-7 w-full h-48 object-cover rounded-xl shadow lg:mt-4">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-3xl font-extrabold text-[#502C58] mb-2">{{ $event->name }}</h2>
                        <div class="flex flex-col sm:flex-row gap-2 text-gray-600 text-base">
                            <span class="flex items-center gap-1">
                                <svg class="w-5 h-5 text-[#E7AB39]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ $event->date }}</span>
                            </span>
                            @if($event->time_start && $event->time_end)
                            <span class="flex items-center gap-1">
                                <svg class="w-5 h-5 text-[#E7AB39]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($event->time_start)->format('g:i A') }} - {{ \Carbon\Carbon::parse($event->time_end)->format('g:i A') }}</span>
                            </span>
                            @endif
                            @if($event->location)
                            <span class="flex items-center gap-1">
                                <svg class="w-5 h-5 text-[#E7AB39]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414a2 2 0 10-2.828 0l-4.243 4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>{{ $event->location }}</span>
                            </span>
                            @endif
                        </div>
                        <div class="mt-5 flex flex-col items-center w-full">
                            <div class="flex justify-center gap-x-4 mb-1 text-sm">
                                <span class="font-semibold text-[#502C58]">
                                    Volunteers: <span class="font-bold">{{ $event->current_volunteers }}</span>
                                </span>
                                <span class="font-semibold text-[#502C58]">
                                    Target: <span class="font-bold">{{ $event->target_volunteers }}</span>
                                </span>
                            </div>
                            <div class="w-4/5 bg-gray-200 rounded-full h-4">
                                <div class="bg-[#502C58] h-4 rounded-full transition-all duration-500"
                                     style="width: {{ $event->target_volunteers > 0 ? min(100, ($event->current_volunteers / $event->target_volunteers) * 100) : 0 }}%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Content -->
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-[#502C58] mb-1">Event Details</h3>
                    <p class="text-gray-700">{{ $event->description }}</p>
                </div>
                <<div class="flex justify-end">
                    <button wire:click="volunteer"
                        class="px-6 py-2 bg-[#502C58] text-white font-semibold rounded-lg shadow hover:bg-[#3f2247] transition-colors">
                        Volunteer Now
                    </button>
                </div>
            @endif
        </div>
    </div>

    <!-- Notifications -->
    @if(session('message'))
        <div x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 3000)"
            class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50">
            {{ session('message') }}
        </div>
    @endif

    @if(session('error'))
        <div x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 3000)"
            class="fixed top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-lg shadow-lg z-50">
            {{ session('error') }}
        </div>
    @endif
</div>