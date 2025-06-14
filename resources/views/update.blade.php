{{-- resources/views/update.blade.php --}}
<x-admin-layout>
    @if(session('success'))
        <div
            id="toast"
            class="fixed top-5 right-5 z-50 px-4 py-3 rounded-lg bg-green-600 text-white shadow-lg flex items-center space-x-3 animate-fade-in-down"
        >
            <i class="fas fa-check-circle text-white"></i>
            <span>{{ session('success') }}</span>
            <button onclick="document.getElementById('toast').remove()" class="ml-3 text-white hover:text-gray-200">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <style>
            @keyframes fade-in-down {
                from { opacity: 0; transform: translateY(-10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fade-in-down {
                animation: fade-in-down 0.3s ease-out;
            }
        </style>

        <script>
            // Auto-dismiss after 3.5 seconds
            setTimeout(() => {
                const toast = document.getElementById('toast');
                if (toast) toast.remove();
            }, 3500);
        </script>
    @endif

    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Update</h1>
    </div>
    <div class="flex flex-col gap-5">
        @include('components.admin.update-announcements')
        @include('components.admin.update-committee')
        @include('components.admin.update-events')
        @include('components.admin.update-gallery')
        @include('components.admin.update-resources')
    </div>
</x-admin-layout>
