<x-admin-layout>
    <div class="flex flex-col">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-2xl font-bold text-[#502C58]">Dashboard</h1>
        </div>
        <!-- Dashboard Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center border border-gray-200">
                <i class="fas fa-users text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">{{ $totalUsers }}</div>
                <div class="text-black mt-1">Total Users</div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center border border-gray-200">
                <i class="fas fa-paw text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">{{ $totalAdoptions }}</div>
                <div class="text-black mt-1">Adoptions</div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center border border-gray-200">
                <i class="fas fa-donate text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">P{{ number_format($totalDonations, 2) }}</div>
                <div class="text-black mt-1">Donations</div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center border border-gray-200">
                <i class="fas fa-clipboard-check text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">{{ $totalApplications }}</div>
                <div class="text-black mt-1">Applications</div>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 gap-6 mb-6">
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 border border-gray-200">
                <div class="inline-block rounded-lg px-4 py-2 mb-3 bg-[#502C58] text-sm text-white font-semibold">
                    History of Adoptions
                </div>
                <div>
                    <canvas id="lineChart" height="220"></canvas>
                </div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 border border-gray-200">
                <div class="inline-block rounded-lg px-4 py-2 mb-3 bg-[#502C58] text-sm text-white font-semibold">
                    Percentage of Donations
                </div>
                <div>
                    <canvas id="pieChart" height="220"></canvas>
                </div>
            </div>
        </div>

        <!-- List of Users Table -->
        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="users">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Users</h1>
            <!-- Table Header -->
            <div class="overflow-x-auto w-full">
                <div class="flex flex-row gap-2 mb-3 text-sm text-white font-semibold">
                    <div class="rounded-lg px-4 py-2 bg-[#502C58]">
                        Current Volunteers
                    </div>
                </div>
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">First Name</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Last Name</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Email</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Mobile Number</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500">Preferred Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td class="px-4 py-2 border border-gray-500">{{ $user->first_name }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $user->last_name }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $user->email }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $user->mobile_number }}</td>
                                <td class="px-4 py-2 border border-gray-500">{{ $user->preferred_volunteer_role_label }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-gray-500 px-4 py-6 border border-gray-500">No users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Get PHP data as JSON
        const adoptionLabels = {!! json_encode(array_keys($adoptionsPerMonth)) !!};
        const adoptionData = {!! json_encode(array_values($adoptionsPerMonth)) !!};
        const donationLabels = {!! json_encode($donationLabels) !!};
        const donationData = {!! json_encode($donationData) !!};

        // Line Chart: Adoptions Over Months
        const ctxLine = document.getElementById('lineChart').getContext('2d');
        new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: adoptionLabels,
                datasets: [{
                    label: 'Adoptions',
                    data: adoptionData,
                    fill: false,
                    borderColor: '#4ABDAC',
                    backgroundColor: '#4ABDAC',
                    tension: 0.4,
                    pointBackgroundColor: '#502C58',
                    pointBorderColor: '#4ABDAC',
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: true } },
                scales: { y: { beginAtZero: true } }
            }
        });

        // Pie Chart: Donations Breakdown
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: donationLabels,
                datasets: [{
                    data: donationData,
                    backgroundColor: [
                        '#502C58',
                        '#4ABDAC',
                        '#E7AB39',
                        '#F67280'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: true, position: 'bottom' } }
            }
        });
    </script>
</x-admin-layout>
