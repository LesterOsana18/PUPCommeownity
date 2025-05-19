<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<x-admin-layout>
    <h1 class="text-3xl font-bold text-[#502C58] mb-6">Dashboard</h1>
    <div class="flex space-x-6 mb-10">
        <div class="flex flex-col text-center gap-[10px] rounded-[15px] justify-center items-center text-[#502C58] bg-white shadow-md p-6 flex-1">
            <h3 class="text-base font-bold">Total No. of Cats:</h3>
            <h1 class="text-5xl font-bold">1234</h1>
        </div>
        <div class="flex flex-col text-center gap-[10px] rounded-[15px] justify-center items-center text-[#502C58] bg-white shadow-md p-6 flex-1">
            <h3 class="text-base font-bold">Total No. of Adopted Cats:</h3>
            <h1 class="text-5xl font-bold">1234</h1>
        </div>
        <div class="flex flex-col text-center gap-[10px] rounded-[15px] justify-center items-center text-[#502C58] bg-white shadow-md p-6 flex-1">
            <h3 class="text-base font-bold">Total No. of Reports:</h3>
            <h1 class="text-5xl font-bold">1234</h1>
        </div>
        <div class="flex flex-col text-center gap-[10px] rounded-[15px] justify-center items-center text-[#502C58] bg-white shadow-md p-6 flex-1">
            <h3 class="text-base font-bold">Total No. of Applications:</h3>
            <h1 class="text-5xl font-bold">1234</h1>
        </div>
        <div class="flex flex-col text-center gap-[10px] rounded-[15px] justify-center items-center text-[#502C58] bg-white shadow-md p-6 flex-1">
            <h3 class="text-base font-bold">Total No. of Donations:</h3>
            <h1 class="text-5xl font-bold">1234</h1>
        </div>
    </div>
    <div class="flex space-x-6 px-4">
        <div class="flex-1">
            <div class="flex flex-row gap-[20px] mb-3">
                <button class="text-base focus:text-white focus:bg-[#502C58] focus:font-bold px-5 py-2 rounded-[10px]">Graph Name</button>
                <button class="text-base focus:text-white focus:bg-[#502C58] focus:font-bold px-5 py-2 rounded-[10px]">Graph Name</button>
            </div>
            <div class="rounded-[15px] bg-white shadow-md p-6">
                <!-- Line Graph for Bottom Box 1 -->
                <canvas id="lineChart"></canvas>
            </div>
        </div>
        <div class="flex-1">
            <div class="flex flex-row gap-[20px] mb-3">
                <button class="text-base focus:text-white focus:bg-[#502C58] focus:font-bold px-5 py-2 rounded-[10px]">Graph Name</button>
                <button class="text-base focus:text-white focus:bg-[#502C58] focus:font-bold px-5 py-2 rounded-[10px]">Graph Name</button>
            </div>
            <div class="rounded-[15px] bg-white shadow-md p-6">
                <!-- Pie Graph for Bottom Box 2 -->
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>
</x-admin-layout>

<script>
    // Line chart example
    const ctxLine = document.getElementById('lineChart').getContext('2d');
    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Sample Data',
                data: [12, 19, 9, 14, 17],
                backgroundColor: 'rgba(80, 44, 88, 0.2)',
                borderColor: '#502C58',
                borderWidth: 2,
                pointBackgroundColor: '#E7AB39',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Pie chart example
    const ctxPie = document.getElementById('pieChart').getContext('2d');
    new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Category A', 'Category B', 'Category C'],
            datasets: [{
                data: [30, 45, 25],
                backgroundColor: [
                    '#502C58',
                    '#E7AB39',
                    '#4ABDAC'
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });
</script>