    <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="messages">
        <h1 class="text-xl text-[#4ABDAC] font-bold">Inquiries / Messages</h1>
        <div class="overflow-x-auto w-full">
            <table class="table-fixed min-w-full border border-collapse text-sm">
                <thead>
                    <tr>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[150px]">Name</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[180px]">Email</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Message</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Date Sent</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $message)
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">{{ $message->name }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $message->email }}</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px] truncate">{{ $message->message }}</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">{{ $message->created_at->format('M d, Y g:i A') }}</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center space-x-2">
                                    <form action="{{ route('moderation.messages.delete-msg', $message) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
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
                            <td colspan="4" class="text-center px-4 py-2 text-gray-500">
                                No contact messages found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
