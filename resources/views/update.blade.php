@if(session('success'))
    <div class="mb-4 p-3 rounded-lg bg-green-100 text-green-800 border border-green-300">
        {{ session('success') }}
    </div>
@endif

{{-- resources/views/update.blade.php --}}
<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Update</h1>
    </div>
    <div class="flex flex-col gap-5">
        @include('components.admin.update-announcements')
    </div>
</x-admin-layout>
