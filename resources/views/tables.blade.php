<x-admin-layout>
    <!-- Display success message -->
    @if (session('success'))
    <div class="flex justify-center w-full fixed left-0 top-0 z-30 mt-8 auto-dismiss-alert">
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded shadow-xl">
            <span class="block sm:inline font-semibold">
                {{ session('success') }}
            </span>
        </div>
    </div>
    @endif

    <!-- Dismiss alert after 5 seconds -->
    @if (session('success'))
    <script>
        setTimeout(function() {
            let alerts = document.querySelectorAll('.auto-dismiss-alert');
            alerts.forEach(function(alert) {
                alert.style.display = 'none';
            });
        }, 5000); // Dismiss after 5 seconds
    </script>
    @endif

    <!-- Main content -->
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Tables</h1>
    </div>
    <div class="flex flex-col gap-5">
        @include('Components.admin.table-adoption')
        @include('Components.admin.table-donation')
        @include('Components.admin.table-application')
    </div>
</x-admin-layout>
