<div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden max-w-7xl mx-auto w-full mb-10">
    <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 text-white">
        <h2 class="text-2xl font-bold">Past Events</h2>
    </div>

    <div class="pt-4 px-4 pb-0 grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($pastEvents as $action)
            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                <div class="h-48 flex items-center justify-center overflow-hidden">
                    <img src="{{ $action['image'] }}" alt="{{ $action['title'] }}"
                        class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex flex-col items-start mb-3">
                        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-[#502C58] transition-colors">
                            {{ $action['title'] }}
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">{{ $action['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <!--Pagination-->
    {{-- <div class="overflow-hidden mb-0 pb-0">
        <div class="mt-4 mb-0 flex justify-center">
            {{ $pastEvents->links() }}
        </div>
    </div> --}}
</div>