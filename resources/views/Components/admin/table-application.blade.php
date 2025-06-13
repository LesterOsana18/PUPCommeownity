<!-- Applications -->
<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="applications">
    <h1 class="text-xl text-[#4ABDAC] font-bold">Applications</h1>
        <!-- Table -->
        <div class="overflow-x-auto w-full">
            <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                    Adoption Applications
                </div>
                <button class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Add Record
                </button>
            </div>
            <table class="table-fixed min-w-full border border-collapse text-sm">
                <thead>
                    <tr>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">First Name</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Last Name</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Address</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Phone</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Email</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Birth Date</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Company/Business Name</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Civil Status</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Sex</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Adopted Before</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Alternate First Name</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Alternate Last Name</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Relationship to Alternate</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Alternate Phone</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Alternate Email</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applications as $application)
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->first_name }}</td>
                            <!-- ... other fields ... -->
                            <td class="px-4 py-2 border border-gray-500 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </button>
                                    <form action="{{ route('tables.applications.destroy', $application->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                            <i class="fa-regular fa-trash-can mr-2"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="16" class="text-center px-4 py-2">No applications found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
