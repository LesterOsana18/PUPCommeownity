<table class="table-fixed min-w-full border border-collapse text-sm">
    <thead>
        <tr>
            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[120px]">Status</th>
            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px]">Date Posted</th>
            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Title</th>
            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[200px]">Action</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($allPosts as $post)
            <tr>
                <!-- Status Toggle -->
                <td class="px-4 py-2 border border-gray-500 text-center">
                    <form action="{{ route('moderation.posts.toggle', $post) }}" method="POST" class="toggle-form">
                        @csrf
                        <button type="submit"
                            class="status-toggle rounded-lg w-32 py-2 font-semibold text-white
                                {{ $post->is_approved ? 'bg-[#4ABDAC]' : 'bg-[#815F20]' }}
                                hover:bg-[#E7AB39]">
                            {{ $post->is_approved ? 'OPEN' : 'CLOSED' }}
                        </button>
                    </form>
                </td>

                <!-- Date Posted -->
                <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                    {{ $post->created_at->format('M d, Y') }}
                </td>

                <!-- Title -->
                <td class="px-4 py-2 border border-gray-500 min-w-[300px]">
                    {{ $post->title }}
                </td>

                <!-- Action -->
                <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                    <div class="flex items-center justify-center space-x-2">
                        <a href="{{ route('updates.show', $post) }}"
                            class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                            <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> Read
                        </a>

                        <form action="{{ route('moderation.posts.delete', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="rounded-lg px-3 py-2 bg-red-600 text-white font-semibold hover:bg-red-700 flex items-center">
                                <i class="fa-solid fa-trash mr-2"></i> Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center text-gray-500 py-6">No posts found.</td>
            </tr>
        @endforelse
    </tbody>

    @if ($allPosts->hasPages())
        <tfoot>
            <tr>
                <td colspan="4" class="pt-4">
                    <div class="flex justify-center">
                        {{ $allPosts->links('pagination::custom-simple') }}
                    </div>
                </td>
            </tr>
        </tfoot>
    @endif
</table>
