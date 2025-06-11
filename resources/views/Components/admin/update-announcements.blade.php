{{-- resources/views/components/admin/update-announcements.blade.php --}}
<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="announcements">
    <div class="flex items-center justify-between">
        <h1 class="text-xl text-[#4ABDAC] font-bold">Announcements</h1>
        <a href="{{ route('admin.announcements.create') }}"
            class="flex items-center gap-2 px-4 py-2 bg-[#502C58] text-white font-semibold rounded-lg hover:bg-[#2e1a33] text-sm">
            <i class="fa-solid fa-plus"></i> Create
        </a>
    </div>

    <div class="overflow-x-auto w-full">
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[120px]">ID No.</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Date Posted</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Title</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px] whitespace-nowrap">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($announcements as $announcement)
                    <tr>
                        <td class="px-4 py-2 border border-gray-500 text-center">{{ $announcement->id }}</td>
                        <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">{{ $announcement->created_at->format('M d, Y') }}</td>
                        <td class="px-4 py-2 border border-gray-500 min-w-[300px]">{{ $announcement->title }}</td>
                        <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.announcements.show', $announcement->id) }}" class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                    <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> Read
                                </a>
                                {{-- Delete button disabled for now (read-only mode) --}}
                                <button disabled class="rounded-lg px-3 py-2 bg-gray-400 text-white font-semibold flex items-center cursor-not-allowed">
                                    <i class="fa-regular fa-trash-can mr-2"></i> Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-gray-500 px-4 py-6 border border-gray-500">No announcements found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($announcements instanceof \Illuminate\Pagination\LengthAwarePaginator && $announcements->hasPages())
        <div class="mt-4">
            {{ $announcements->links() }}
        </div>
    @endif
</div>
