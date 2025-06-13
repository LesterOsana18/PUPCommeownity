<!-- Donations -->
<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="adoptions">
    <h1 class="text-xl text-[#4ABDAC] font-bold">Donations</h1>
    <!-- Table Header -->
    <div class="overflow-x-auto w-full">
        <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
            <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                Donations
            </div>
        </div>
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Full Name</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Email</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Mobile Number</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Donation Type</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Amount</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Proof</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Details</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Message</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Agreement</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($donations as $donation)
                    <tr>
                        <td class="px-4 py-2 border border-gray-500">{{ $donation->full_name }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $donation->email }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $donation->mobile_number }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ ucfirst($donation->donation_type) }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $donation->donation_amount ?? '-' }}</td>
                        <td class="px-4 py-2 border border-gray-500">
                            @if (!empty($donation->donation_proof))
                                <a href="{{ asset('storage/' . $donation->donation_proof) }}" target="_blank" class="text-blue-600 underline">View</a>
                            @else
                                -
                            @endif
                        </td>
                        <td class="px-4 py-2 border border-gray-500">{{ $donation->donation_details }}</td>
                        <td class="px-4 py-2 border border-gray-500">{{ $donation->message ?? '-' }}</td>
                        <td class="px-4 py-2 border border-gray-500 text-center">
                            @if ($donation->agreement)
                                <span class="text-green-600 font-semibold">Yes</span>
                            @else
                                <span class="text-red-600 font-semibold">No</span>
                            @endif
                        </td>
                        <td class="px-4 py-2 border border-gray-500 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('donations.edit', $donation->id ?? 0) }}" class="rounded-lg px-3 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 flex items-center">
                                    <i class="fa-regular fa-pen-to-square mr-2"></i>
                                    Edit
                                </a>
                                <form action="{{ route('donations.destroy', $donation->id ?? 0) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this donation?');" class="d-inline">
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
                        <td colspan="10" class="text-center px-4 py-2">No donations found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
