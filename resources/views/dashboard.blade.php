<x-admin-layout>
    <div class="flex flex-col">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-2xl font-bold text-[#502C58]">Dashboard</h1>
        </div>
        <!-- Dashboard Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center border border-gray-200">
                <i class="fas fa-users text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">1,245</div>
                <div class="text-black mt-1">Total Users</div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center border border-gray-200">
                <i class="fas fa-paw text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">534</div>
                <div class="text-black mt-1">Adoptions</div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center border border-gray-200">
                <i class="fas fa-donate text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">$8,740</div>
                <div class="text-black mt-1">Donations</div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center border border-gray-200">
                <i class="fas fa-clipboard-check text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">192</div>
                <div class="text-black mt-1">Applications</div>
            </div>
        </div>
        <!-- Charts -->
        <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 gap-6">
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 border border-gray-200">
                <div class="inline-block rounded-lg px-4 py-2 mb-3 bg-[#502C58] text-sm text-white font-semibold">
                    Graph Name
                </div>
                <div>
                    <canvas id="lineChart" height="220"></canvas>
                </div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 border border-gray-200">
                <div class="inline-block rounded-lg px-4 py-2 mb-3 bg-[#502C58] text-sm text-white font-semibold">
                    Graph Name
                </div>
                <div>
                    <canvas id="pieChart" height="220"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Line Chart: Adoptions Over Months (Sample Data)
        const ctxLine = document.getElementById('lineChart').getContext('2d');
        new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Adoptions',
                    data: [90, 75, 110, 80, 95, 84], // Sample that adds up to 534
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

        // Pie Chart: Donations Breakdown (Sample Data)
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['Cat Food', 'Money', 'Litter Sand'],
                datasets: [{
                    data: [3200, 4000, 1540], // Total is $8,740
                    backgroundColor: [
                        '#502C58',
                        '#4ABDAC',
                        '#E7AB39'
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