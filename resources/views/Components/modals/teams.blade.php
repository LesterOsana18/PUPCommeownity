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
                    @foreach ([
                        ['Office of the President', 'op.pupsp2019@gmail.com', 'Yelen Nepomuceno', 'Event proposals, resolutions, memoranda'],
                        ['Office of the Vice President', 'pupsp.comms@gmail.com', 'Anna Maria J. Sengco', 'External inquiries and partnerships'],
                        ['Office of the Secretary General', 'sintangpusa2019@gmail.com', 'Kristylle Ann F. De Vera', 'Internal communications'],
                        ['Office of the Treasurer', 'sp.officeofthetreasurer@gmail.com', 'Shammyzel Ashley A. Lucina', 'Reimbursement reports'],
                        ['Office of the Auditor', 'pupsp.officeoftheauditor@gmail.com', 'Danna Althea S. Teh', 'Financial audits'],
                        ['Adoption & Fostering Committee', 'pupspadoptionandfoster23@gmail.com', 'Alaiza C. Dela Cruz', 'Adoption and foster arrangements'],
                        ['Cat Monitoring & Feeding Committee', 'pupsp.catmonfeedcomms@gmail.com', 'Kyla Marie Moral', 'Campus cat welfare monitoring'],
                        ['Creatives Committee', 'pupsp.creatives@gmail.com', 'Ivy Myuki S. Añovert', 'Visuals and content creation'],
                        ['Marketing Committee', 'pupsp.mktg@gmail.com', 'Martin Jay T. Pollicar', 'External outreach and sponsorships'],
                        ['Membership & Recruitment Committee', 'pupsp.membership@gmail.com', 'Rhea Janell H. Orocio', 'Volunteer and member management'],
                        ['Publications Committee', 'pubcom.pupsp@gmail.com', 'Reynalyn R. Bawag', 'Publication materials and releases'],
                    ] as $entry)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $entry[0] }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                <a href="mailto:{{ $entry[1] }}"
                                    class="text-[#502C58] hover:underline">
                                    {{ $entry[1] }}
                                </a>
                            </td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">{{ $entry[2] }}</td>
                            <td class="px-4 py-2 text-sm text-gray-500">{{ $entry[3] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
