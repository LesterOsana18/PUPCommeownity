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

<div class="mt-8 flex justify-center">
    {{ $updates->links() }}
</div>
