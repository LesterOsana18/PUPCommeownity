{{-- resources/views/components/admin/update-events.blade.php --}}
<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="events">
    <div class="flex items-center justify-between">
        <h1 class="text-xl text-[#4ABDAC] font-bold">Events</h1>
        <a href="{{ route('admin.events.create') }}"
            class="flex items-center gap-2 px-4 py-2 bg-[#502C58] text-white font-semibold rounded-lg hover:bg-[#2e1a33] text-sm">
            <i class="fa-solid fa-plus"></i> Create
        </a>
    </div>

    <div class="overflow-x-auto w-full">
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[120px]">Event ID</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Date</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Event Name</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px] whitespace-nowrap">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($events as $event)
                    <tr>
                        <td class="px-4 py-2 border border-gray-500 text-center">{{ $event->id }}</td>
                        <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">{{ $event->created_at->format('M d, Y') }}</td>
                        <td class="px-4 py-2 border border-gray-500 min-w-[300px]">{{ $event->name }}</td>
                        <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.events.show', $event->id) }}" class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                    <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> Read
                                </a>
                                {{-- Delete button --}}
                                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-gray-500 px-4 py-6 border border-gray-500">No events found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>