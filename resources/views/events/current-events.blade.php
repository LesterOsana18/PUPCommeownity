<div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden max-w-7xl mx-auto w-full mb-10">
    <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 text-white">
        <h2 class="text-2xl font-bold">Current Events</h2>
    </div>

    <div class="pt-4 px-4 pb-0 grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($currentEvents as $i => $event)
            @php
                $current = $event['current'];
                $target = $event['target'];
                $progress = min(100, ($current && $target) ? ($current / $target) * 100 : 0);
            @endphp
            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                <div class="h-48 flex items-center justify-center overflow-hidden">
                    <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex flex-col items-center mb-3 w-full">
                        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-[#502C58] transition-colors w-full text-left">
                            {{ $event['title'] }}
                        </h3>
                        <div class="mt-2 flex flex-col items-center w-full">
                            <div class="flex justify-center gap-x-4 mb-1 text-sm">
                                <span class="font-semibold text-[#502C58]">
                                    Volunteers: <span class="font-bold">{{ $current }}</span>
                                </span>
                                <span class="font-semibold text-[#502C58]">
                                    Target: <span class="font-bold">{{ $target }}</span>
                                </span>
                            </div>
                            <div class="w-4/5 bg-gray-200 rounded-full h-4">
                                <div class="bg-[#502C58] h-4 rounded-full transition-all duration-500"
                                    style="width: {{ $progress }}%"></div>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">{{ $event['description'] }}</p>
                    <button onclick="openEventModal({{ $event['id'] }})"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-[#502C58] hover:bg-[#3f2247] focus:outline-none focus:ring-2 focus:ring-[#502C58]">
                        Read
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
    <!--Pagination-->
    {{-- <div class="overflow-hidden mb-0 pb-0">
        <div class="mt-4 mb-0 flex justify-center">
            {{ $currentEvents->links() }}
        </div>
    </div> --}}
</div>
