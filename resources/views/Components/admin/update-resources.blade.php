<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="resources">
    <div class="flex items-center justify-between">
        <h1 class="text-xl text-[#4ABDAC] font-bold">Resources</h1>
        <a href="#" {{-- Update with actual "create" page --}}
            class="flex items-center gap-2 px-4 py-2 bg-[#502C58] text-white font-semibold rounded-lg hover:bg-[#2e1a33] text-sm">
            <i class="fa-solid fa-plus"></i> Create
        </a>
    </div>

    <div class="overflow-x-auto w-full">
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[60px] text-center">ID</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[200px]">Title</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Description</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px] whitespace-nowrap text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($resources as $resource)
                    <tr>
                        <td class="px-4 py-2 border border-gray-500 text-center">{{ $resource->id }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $resource->title }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $resource->description }}</td>
                        <td class="px-4 py-2 border border-gray-500 text-center">
                            <div class="flex items-center justify-center gap-2">
                                @if ($resource->link)
                                    <a href="{{ $resource->link }}" target="_blank"
                                        class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> View
                                    </a>
                                @endif
                                <form action="{{ route('admin.resources.destroy', $resource->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this resource?');">
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
                        <td colspan="6" class="text-center text-gray-500 px-4 py-6 border border-gray-500">No resources found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- @if ($resources instanceof \Illuminate\Pagination\LengthAwarePaginator && $resources->hasPages())
        <div class="mt-4">
            {{ $resources->links() }}
        </div>
    @endif --}}
</div>
