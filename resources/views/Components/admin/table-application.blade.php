<!-- Applications -->
<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="applications">
    <h1 class="text-xl text-[#4ABDAC] font-bold">Applications</h1>
        <!-- Table -->
        <div class="overflow-x-auto w-full">
            <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                    Adoption Applications
                </div>
                <a href="{{ route('application.create') }}" class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Add Record
                </a>
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
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Occupation</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Company/Business Name</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Social Media Profile</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Civil Status</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Sex</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Adoption Prompt</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Adopted Before</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Co-signer Name</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Co-signer Relationship</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Co-signer Signature</th>
                        <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applications as $application)
                        <tr>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->first_name }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->last_name }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->address }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->phone }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->email }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->birth_date }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->occupation }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->company_business_name }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->social_media_profile }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->civil_status }}</td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->sex }}</td>
                            <td class="px-4 py-2 border border-gray-500">
                                @if($application->adoption_prompt)
                                    {{ implode(', ', array_map('ucfirst', explode(',', $application->adoption_prompt))) }}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-4 py-2 border border-gray-500">{{ $application->adopted_before }}</td>
                            <td class="px-4 py-2 border border-gray-500">
                                {{ $application->co_signer_name ?: 'N/A' }}
                            </td>
                            <td class="px-4 py-2 border border-gray-500">
                                {{ $application->co_signer_relationship ?: 'N/A' }}
                            </td>
                            <td class="px-4 py-2 border border-gray-500">
                                @if($application->co_signer_signature)
                                    <a href="{{ asset('storage/' . $application->co_signer_signature) }}" target="_blank" class="text-[#4ABDAC] underline">
                                        View
                                    </a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-4 py-2 border border-gray-500 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('tables.applications.edit', $application->id) }}"
                                        class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                                        Edit
                                    </a>
                                    <form action="{{ route('tables.applications.destroy', $application->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this application?');" class="d-inline">
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
                            <td colspan="22" class="text-center text-gray-500 px-4 py-6 border border-gray-500">No applications found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
