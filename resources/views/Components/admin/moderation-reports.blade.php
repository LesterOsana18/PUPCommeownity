<!-- resources/views/Components/admin/moderation-reports.blade.php -->

<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="reports">
    <h1 class="text-xl text-[#4ABDAC] font-bold">Reports</h1>
    <div class="overflow-x-auto w-full">
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[120px]">Status</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Date Reported</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Description</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px] whitespace-nowrap">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reports as $report)
                    <tr>
                        <td class="px-4 py-2 border border-gray-500 text-center">
                            <form action="{{ route('reports.resolve', $report->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit"
                                    class="rounded-lg w-40 py-2 font-semibold text-white
                                        {{ $report->is_resolved ? 'bg-[#815F20] hover:bg-[#6b4d1a]' : 'bg-[#4ABDAC] hover:bg-[#E7AB39]' }}">
                                    {{ $report->is_resolved ? 'RESOLVED' : 'MARK AS RESOLVED' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                            {{ \Carbon\Carbon::parse($report->created_at)->format('M d, Y') }}
                        </td>
                        <td class="px-4 py-2 border border-gray-500 min-w-[300px] truncate">
                            {{ $report->description }}
                        </td>
                        <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('reports.show', $report->id) }}"
                                   class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                    <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                    Read
                                </a>
                                <form action="{{ route('reports.delete', $report->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this report?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="rounded-lg px-3 py-2 bg-red-600 text-white font-semibold hover:bg-red-700 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center px-4 py-2 text-gray-500">
                            No reports found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
