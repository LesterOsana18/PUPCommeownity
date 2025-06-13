<div id="teams-modal"
    class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 flex items-center justify-center px-4">

    <div class="bg-white rounded-2xl shadow-xl p-6 w-full max-w-5xl max-h-[90vh] overflow-y-auto relative m-4">
        <!-- Close Button -->
        <button onclick="toggleModal('teams-modal')"
            class="absolute top-4 right-4 text-gray-500 hover:text-black text-2xl leading-none focus:outline-none">
            &times;
        </button>

        <!-- Modal Header -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-[#502C58]">All Teams & Committees</h2>
            <p class="text-gray-600">Complete list of our organizational structure</p>
        </div>

        <!-- Modal Content -->
        <div class="overflow-auto border border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gradient-to-r from-[#502C58] to-[#3f2247]">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Office/Committee</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Contact
                            Email</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Person
                            in Charge</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Role
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($committees as $entry)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{ $entry->office }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                <a href="mailto:{{ $entry->email }}" class="text-[#502C58] hover:underline">{{ $entry->email }}</a>
                            </td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">{{ $entry->person_in_charge }}</td>
                            <td class="px-4 py-2 text-sm text-gray-500">{{ $entry->role }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
