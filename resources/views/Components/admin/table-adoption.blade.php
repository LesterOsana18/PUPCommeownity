<!-- Adoptions -->
<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="adoptions">
    <h1 class="text-xl text-[#4ABDAC] font-bold">Adoptions</h1>

    <!-- Available Cats Table -->
    <div class="overflow-x-auto w-full">
        <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
            <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                Available Cats
            </div>
            <a href="{{ route('adoptions.create') }}"
            class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center text-white font-semibold">
                <i class="fa-solid fa-plus mr-2"></i>
                Add Record
            </a>
        </div>
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Name</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Breed</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Sex</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Age</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Color</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Sterilized</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Location</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cats as $cat)
                    <tr>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->name }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->breed }}</td>
                        <td class="px-4 py-2 border border-gray-500 capitalize">{{ $cat->sex }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->age }}</td>
                        <td class="px-4 py-2 border border-gray-500 capitalize">{{ $cat->color }}</td>
                        <td class="px-4 py-2 border border-gray-500">
                            {{ $cat->sterilized === 1 ? 'Yes' : ($cat->sterilized === 0 ? 'No' : '-') }}
                        </td>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->location }}</td>
                        <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('adoptions.edit', $cat->id) }}" class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                    <i class="fa-regular fa-pen-to-square mr-2"></i>
                                    Edit
                                </a>
                                <form action="{{ route('adoptions.destroy', $cat->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="8" class="px-4 py-2 border border-gray-500 text-center">No available cats.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Previously Available Cats Table -->
    <div class="overflow-x-auto w-full">
        <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
            <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                Previously Available Cats
            </div>
            <a href="{{ route('adoptions.create') }}"
            class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center text-white font-semibold">
                <i class="fa-solid fa-plus mr-2"></i>
                Add Record
            </a>
        </div>
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Name</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Breed</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Sex</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Age</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Color</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Sterilized</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Location</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($previousCats as $cat)
                    <tr>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->name }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->breed }}</td>
                        <td class="px-4 py-2 border border-gray-500 capitalize">{{ $cat->sex }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->age }}</td>
                        <td class="px-4 py-2 border border-gray-500 capitalize">{{ $cat->color }}</td>
                        <td class="px-4 py-2 border border-gray-500">
                            {{ $cat->sterilized === 1 ? 'Yes' : ($cat->sterilized === 0 ? 'No' : '-') }}
                        </td>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->location }}</td>
                        <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('adoptions.edit', $cat->id) }}" class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                    <i class="fa-regular fa-pen-to-square mr-2"></i>
                                    Edit
                                </a>
                                <form action="{{ route('adoptions.destroy', $cat->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="8" class="px-4 py-2 border border-gray-500 text-center">No previously available cats.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Legacy Cats Table -->
    <div class="overflow-x-auto w-full">
        <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
            <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                Legacy Cats
            </div>
            <a href="{{ route('adoptions.create') }}"
            class="rounded-lg px-4 py-2 bg-[#4ABDAC] hover:bg-[#369688] flex items-center text-white font-semibold">
                <i class="fa-solid fa-plus mr-2"></i>
                Add Record
            </a>
        </div>
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Name</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Breed</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Sex</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Age</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Color</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Sterilized</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Year of Death</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($deceasedCats as $cat)
                    <tr>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->name }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->breed }}</td>
                        <td class="px-4 py-2 border border-gray-500 capitalize">{{ $cat->sex }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $cat->age }}</td>
                        <td class="px-4 py-2 border border-gray-500 capitalize">{{ $cat->color }}</td>
                        <td class="px-4 py-2 border border-gray-500">
                            {{ $cat->sterilized === 1 ? 'Yes' : ($cat->sterilized === 0 ? 'No' : '-') }}
                        </td>
                        <td class="px-4 py-2 border border-gray-500">
                            {{ $cat->date_of_death ? \Carbon\Carbon::parse($cat->date_of_death)->format('Y') : '-' }}
                        </td>
                        <td class="px-4 py-2 border border-gray-500 text-center max-w-[200px]">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('adoptions.edit', $cat->id) }}" class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                    <i class="fa-regular fa-pen-to-square mr-2"></i>
                                    Edit
                                </a>
                                <form action="{{ route('adoptions.destroy', $cat->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="8" class="px-4 py-2 border border-gray-500 text-center">No legacy cats.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>