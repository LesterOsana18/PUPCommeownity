<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="committees">
    <div class="flex items-center justify-between">
        <h1 class="text-xl text-[#4ABDAC] font-bold">Committee List</h1>
    </div>

    <div class="overflow-x-auto w-full">
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[180px]">Office</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[220px]">Email</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[220px]">Person-in-Charge</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[150px]">Role</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px]">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($committees as $committee)
                    <tr>
                        <td class="px-4 py-2 border border-gray-500">{{ $committee->office }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $committee->email }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $committee->person_in_charge }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $committee->role }}</td>
                        <td class="px-4 py-2 border border-gray-500">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center text-sm">
                                    <i class="fa-solid fa-pen mr-2"></i> Update
                                </a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-gray-500 px-4 py-6 border border-gray-500">No committee members found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- @if ($committees->hasPages())
        <div class="mt-4">
            {!! $committees->withQueryString()->fragment('committee')->links() !!}
        </div>
    @endif --}}

</div>
